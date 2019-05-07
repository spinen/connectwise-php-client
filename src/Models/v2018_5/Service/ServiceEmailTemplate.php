<?php

namespace Spinen\ConnectWise\Models\v2018_5\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceEmailTemplate
 *
 * @property integer $id
 * @property string $type
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
    ];
}
