<?php

namespace Spinen\ConnectWise\Models\v2019_3\Company;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class OwnershipTypeReference Version v2019_3
 *
 * Model for OwnershipTypeReference
 *
 * @property Metadata $_info
 * @property integer $id
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
        'name' => 'string'
    ];
}
