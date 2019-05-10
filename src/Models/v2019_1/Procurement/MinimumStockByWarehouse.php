<?php

namespace Spinen\ConnectWise\Models\v2019_1\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MinimumStockByWarehouse Version v2019_1
 *
 * Model for MinimumStockByWarehouse
 *
 * @property Metadata $_info
 * @property WarehouseReference $warehouse
 * @property integer $id
 * @property integer $minimumStock
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
