<?php

namespace Spinen\ConnectWise\Models\v2018_5\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MinimumStockByWarehouse Version v2018_5
 * 
 * Model for MinimumStockByWarehouse
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_5\Procurement\WarehouseReference $warehouse
 * @property integer $minimumStock
 * @property Spinen\ConnectWise\Models\v2018_5\Procurement\Metadata $_info
 */
class MinimumStockByWarehouse extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'warehouse' => 'Spinen\ConnectWise\Models\v2018_5\Procurement\WarehouseReference',
        'minimumStock' => 'integer',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Procurement\Metadata',
    ];
}
