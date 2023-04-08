<?php

namespace Spinen\ConnectWise\Models\v2018_4\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OwnershipTypeReference Version v2018_4
 *
 * Model for OwnershipTypeReference
 *
 * @property Metadata $_info
 * @property int $id
 * @property string $name
 */
class OwnershipTypeReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'name' => 'string',
    ];
}
