<?php

namespace Spinen\ConnectWise\Models\v2019_3\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MinimumStockByWarehouse Version v2019_3
 *
 * Model for MinimumStockByWarehouse
 *
 * @property Metadata $_info
 * @property WarehouseReference $warehouse
 * @property int $id
 * @property int $minimumStock
 */
class MinimumStockByWarehouse extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'minimumStock' => 'integer',
        'warehouse' => WarehouseReference::class,
    ];
}
