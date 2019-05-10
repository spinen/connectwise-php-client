<?php

namespace Spinen\ConnectWise\Models\v2018_6\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Category Version v2018_6
 *
 * Model for Category
 *
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\Metadata',
        'addAllLocations' => 'boolean',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'integrationXref' => 'string',
        'locationIds' => 'array',
        'name' => 'string',
        'priceLevelXref' => 'string',
        'removeAllLocations' => 'boolean',
    ];
}
