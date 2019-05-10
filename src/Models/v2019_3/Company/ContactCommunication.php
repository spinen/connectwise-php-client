<?php

namespace Spinen\ConnectWise\Models\v2019_3\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ContactCommunication Version v2019_3
 *
 * Model for ContactCommunication
 *
 * @property integer $id
 * @property integer $contactId
 * @property Spinen\ConnectWise\Models\v2019_3\Company\CommunicationTypeReference $type
 * @property string $value
 * @property string $extension
 * @property boolean $defaultFlag
 * @property Spinen\ConnectWise\Models\v2019_3\Company\Guid $mobileGuid
 * @property string $communicationType
 * @property string $domain
 * @property Spinen\ConnectWise\Models\v2019_3\Company\Metadata $_info
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
        'type' => 'Spinen\ConnectWise\Models\v2019_3\Company\CommunicationTypeReference',
        'value' => 'string',
        'extension' => 'string',
        'defaultFlag' => 'boolean',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2019_3\Company\Guid',
        'communicationType' => 'string',
        'domain' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Company\Metadata',
    ];
}
