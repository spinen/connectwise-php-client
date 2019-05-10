<?php

namespace Spinen\ConnectWise\Models\v2019_1\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class InventoryByWarehouse Version v2019_1
 *
 * Model for InventoryByWarehouse
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\CatalogItemReference $catalogItem
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\WarehouseBinReference $warehouseBin
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\WarehouseReference $warehouse
 * @property integer $id
 * @property integer $onHand
 */
class InventoryByWarehouse extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\Metadata',
        'catalogItem' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\CatalogItemReference',
        'id' => 'integer',
        'onHand' => 'integer',
        'warehouse' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\WarehouseReference',
        'warehouseBin' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\WarehouseBinReference',
    ];
}
