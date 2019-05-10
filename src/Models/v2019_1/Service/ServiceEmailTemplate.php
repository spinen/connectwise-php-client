<?php

namespace Spinen\ConnectWise\Models\v2019_1\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceEmailTemplate Version v2019_1
 *
 * Model for ServiceEmailTemplate
 *
 * @property integer $id
 * @property string $type
 * @property Spinen\ConnectWise\Models\v2019_1\Service\ServiceSurveyReference $serviceSurvey
 * @property Spinen\ConnectWise\Models\v2019_1\Service\BoardReference $serviceBoard
 * @property boolean $useSenderFlag
 * @property string $firstName
 * @property string $lastName
 * @property string $emailAddress
 * @property string $subject
 * @property string $body
 * @property boolean $copySenderFlag
 * @property boolean $tasksFlag
 * @property boolean $resourceRecordsFlag
 * @property boolean $externalContactNotifications
 * @property boolean $internalContactNotifications
 * @property Spinen\ConnectWise\Models\v2019_1\Service\ServiceStatusReference $serviceStatus
 * @property Spinen\ConnectWise\Models\v2019_1\Service\Metadata $_info
 */
class ServiceEmailTemplate extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'type' => 'string',
        'serviceSurvey' => 'Spinen\ConnectWise\Models\v2019_1\Service\ServiceSurveyReference',
        'serviceBoard' => 'Spinen\ConnectWise\Models\v2019_1\Service\BoardReference',
        'useSenderFlag' => 'boolean',
        'firstName' => 'string',
        'lastName' => 'string',
        'emailAddress' => 'string',
        'subject' => 'string',
        'body' => 'string',
        'copySenderFlag' => 'boolean',
        'tasksFlag' => 'boolean',
        'resourceRecordsFlag' => 'boolean',
        'externalContactNotifications' => 'boolean',
        'internalContactNotifications' => 'boolean',
        'serviceStatus' => 'Spinen\ConnectWise\Models\v2019_1\Service\ServiceStatusReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Service\Metadata',
    ];
}
