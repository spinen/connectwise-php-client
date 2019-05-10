<?php

namespace Spinen\ConnectWise\Models\v2019_2\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceEmailTemplate Version v2019_2
 *
 * Model for ServiceEmailTemplate
 *
 * @property BoardReference $serviceBoard
 * @property Metadata $_info
 * @property ServiceStatusReference $serviceStatus
 * @property ServiceSurveyReference $serviceSurvey
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
        '_info' => Metadata::class,
        'body' => 'string',
        'copySenderFlag' => 'boolean',
        'emailAddress' => 'string',
        'externalContactNotifications' => 'boolean',
        'firstName' => 'string',
        'id' => 'integer',
        'internalContactNotifications' => 'boolean',
        'lastName' => 'string',
        'resourceRecordsFlag' => 'boolean',
        'serviceBoard' => BoardReference::class,
        'serviceStatus' => ServiceStatusReference::class,
        'serviceSurvey' => ServiceSurveyReference::class,
        'subject' => 'string',
        'tasksFlag' => 'boolean',
        'type' => 'string',
        'useSenderFlag' => 'boolean',
    ];
}
