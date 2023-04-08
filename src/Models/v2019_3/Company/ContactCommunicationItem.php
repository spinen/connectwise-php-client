<?php

namespace Spinen\ConnectWise\Models\v2019_3\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ContactCommunicationItem Version v2019_3
 *
 * Model for ContactCommunicationItem
 *
 * @property CommunicationTypeReference $type
 * @property bool $defaultFlag
 * @property int $id
 * @property string $communicationType
 * @property string $domain
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
        'domain' => 'string',
        'extension' => 'string',
        'id' => 'integer',
        'type' => CommunicationTypeReference::class,
        'value' => 'string',
    ];
}
