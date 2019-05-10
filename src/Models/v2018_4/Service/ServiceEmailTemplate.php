<?php

namespace Spinen\ConnectWise\Models\v2018_4\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceEmailTemplate Version v2018_4
 *
 * Model for ServiceEmailTemplate
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Service\BoardReference $serviceBoard
 * @property Spinen\ConnectWise\Models\v2018_4\Service\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_4\Service\ServiceStatusReference $serviceStatus
 * @property Spinen\ConnectWise\Models\v2018_4\Service\ServiceSurveyReference $serviceSurvey
 * @property boolean $copySenderFlag
 * @property boolean $externalContactNotifications
 * @property boolean $internalContactNotifications
 * @property boolean $resourceRecordsFlag
 * @property boolean $tasksFlag
 * @property boolean $useSenderFlag
 * @property integer $id
 * @property string $body
 * @property string $emailAddress
 * @property string $firstName
 * @property string $lastName
 * @property string $subject
 * @property string $type
 */
class ServiceEmailTemplate extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Service\Metadata',
        'body' => 'string',
        'copySenderFlag' => 'boolean',
        'emailAddress' => 'string',
        'externalContactNotifications' => 'boolean',
        'firstName' => 'string',
        'id' => 'integer',
        'internalContactNotifications' => 'boolean',
        'lastName' => 'string',
        'resourceRecordsFlag' => 'boolean',
        'serviceBoard' => 'Spinen\ConnectWise\Models\v2018_4\Service\BoardReference',
        'serviceStatus' => 'Spinen\ConnectWise\Models\v2018_4\Service\ServiceStatusReference',
        'serviceSurvey' => 'Spinen\ConnectWise\Models\v2018_4\Service\ServiceSurveyReference',
        'subject' => 'string',
        'tasksFlag' => 'boolean',
        'type' => 'string',
        'useSenderFlag' => 'boolean',
    ];
}
