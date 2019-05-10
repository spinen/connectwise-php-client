<?php

namespace Spinen\ConnectWise\Models\v2018_5\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ContactCommunication Version v2018_5
 *
 * Model for ContactCommunication
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Company\CommunicationTypeReference $type
 * @property Spinen\ConnectWise\Models\v2018_5\Company\Guid $mobileGuid
 * @property Spinen\ConnectWise\Models\v2018_5\Company\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Company\Metadata',
        'communicationType' => 'string',
        'contactId' => 'integer',
        'defaultFlag' => 'boolean',
        'extension' => 'string',
        'id' => 'integer',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2018_5\Company\Guid',
        'type' => 'Spinen\ConnectWise\Models\v2018_5\Company\CommunicationTypeReference',
        'value' => 'string',
    ];
}
