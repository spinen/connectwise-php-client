<?php

namespace Spinen\ConnectWise\Models\v2018_4\Company;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ContactCommunication Version v2018_4
 *
 * Model for ContactCommunication
 *
 * @property CommunicationTypeReference $type
 * @property Guid $mobileGuid
 * @property Metadata $_info
 * @property boolean $defaultFlag
 * @property integer $contactId
 * @property integer $id
 * @property string $communicationType
 * @property string $extension
 * @property string $value
 */
class ContactCommunication extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'communicationType' => 'string',
        'contactId' => 'integer',
        'defaultFlag' => 'boolean',
        'extension' => 'string',
        'id' => 'integer',
        'mobileGuid' => Guid::class,
        'type' => CommunicationTypeReference::class,
        'value' => 'string'
    ];
}
