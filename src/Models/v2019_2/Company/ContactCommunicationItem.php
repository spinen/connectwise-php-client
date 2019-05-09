<?php

namespace Spinen\ConnectWise\Models\v2019_2\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ContactCommunicationItem Version v2019_2
 * 
 * Model for ContactCommunicationItem
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_2\Company\CommunicationTypeReference $type
 * @property string $value
 * @property string $extension
 * @property boolean $defaultFlag
 * @property string $communicationType
 */
class ContactCommunicationItem extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'type' => 'Spinen\ConnectWise\Models\v2019_2\Company\CommunicationTypeReference',
        'value' => 'string',
        'extension' => 'string',
        'defaultFlag' => 'boolean',
        'communicationType' => 'string',
    ];
}
