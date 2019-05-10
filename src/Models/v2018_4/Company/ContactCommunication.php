<?php

namespace Spinen\ConnectWise\Models\v2018_4\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ContactCommunication Version v2018_4
 *
 * Model for ContactCommunication
 *
 * @property integer $id
 * @property integer $contactId
 * @property Spinen\ConnectWise\Models\v2018_4\Company\CommunicationTypeReference $type
 * @property string $value
 * @property string $extension
 * @property boolean $defaultFlag
 * @property Spinen\ConnectWise\Models\v2018_4\Company\Guid $mobileGuid
 * @property string $communicationType
 * @property Spinen\ConnectWise\Models\v2018_4\Company\Metadata $_info
 */
class ContactCommunication extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'contactId' => 'integer',
        'type' => 'Spinen\ConnectWise\Models\v2018_4\Company\CommunicationTypeReference',
        'value' => 'string',
        'extension' => 'string',
        'defaultFlag' => 'boolean',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2018_4\Company\Guid',
        'communicationType' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Company\Metadata',
    ];
}
