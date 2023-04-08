<?php

namespace Spinen\ConnectWise\Models\v2019_1\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OwnershipType Version v2019_1
 *
 * Model for OwnershipType
 *
 * @property Metadata $_info
 * @property int $id
 * @property string $name
 */
class OwnershipType extends Model
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
