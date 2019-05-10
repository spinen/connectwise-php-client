<?php

namespace Spinen\ConnectWise\Models\v2019_2\Procurement;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class Category Version v2019_2
 *
 * Model for Category
 *
 * @property Metadata $_info
 * @property array $locationIds
 * @property boolean $addAllLocations
 * @property boolean $inactiveFlag
 * @property boolean $removeAllLocations
 * @property integer $id
 * @property string $integrationXref
 * @property string $name
 * @property string $priceLevelXref
 */
class Category extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'addAllLocations' => 'boolean',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'integrationXref' => 'string',
        'locationIds' => 'array',
        'name' => 'string',
        'priceLevelXref' => 'string',
        'removeAllLocations' => 'boolean'
    ];
}
