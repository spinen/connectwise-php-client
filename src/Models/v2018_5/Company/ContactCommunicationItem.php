<?php

namespace Spinen\ConnectWise\Models\v2018_5\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ContactCommunicationItem Version v2018_5
 *
 * Model for ContactCommunicationItem
 *
 * @property CommunicationTypeReference $type
 * @property boolean $defaultFlag
 * @property integer $id
 * @property string $communicationType
 * @property string $extension
 * @property string $value
 */
class ContactCommunicationItem extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'communicationType' => 'string',
        'defaultFlag' => 'boolean',
        'extension' => 'string',
        'id' => 'integer',
        'type' => CommunicationTypeReference::class,
        'value' => 'string',
    ];
}
