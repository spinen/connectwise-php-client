<?php

namespace Spinen\ConnectWise\Models\v2018_4\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class InventoryByWarehouse Version v2018_4
 *
 * Model for InventoryByWarehouse
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\CatalogItemReference $catalogItem
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\WarehouseReference $warehouse
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\WarehouseBinReference $warehouseBin
 * @property integer $onHand
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\Metadata $_info
 */
class InventoryByWarehouse extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'catalogItem' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\CatalogItemReference',
        'warehouse' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\WarehouseReference',
        'warehouseBin' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\WarehouseBinReference',
        'onHand' => 'integer',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\Metadata',
    ];
}
