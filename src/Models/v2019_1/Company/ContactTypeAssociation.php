<?php

namespace Spinen\ConnectWise\Models\v2019_1\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ContactTypeAssociation Version v2019_1
 *
 * Model for ContactTypeAssociation
 *
 * @property ContactReference $contact
 * @property ContactTypeReference $type
 * @property Metadata $_info
 * @property integer $id
 */
class ContactTypeAssociation extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'contact' => ContactReference::class,
        'id' => 'integer',
        'type' => ContactTypeReference::class,
    ];
}
