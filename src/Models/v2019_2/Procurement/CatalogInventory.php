<?php

namespace Spinen\ConnectWise\Models\v2019_2\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CatalogInventory Version v2019_2
 *
 * Model for CatalogInventory
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\CatalogItemReference $catalogItem
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\WarehouseBinReference $warehouseBin
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\WarehouseReference $warehouse
 * @property integer $id
 * @property integer $onHand
 */
class CatalogInventory extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\Metadata',
        'catalogItem' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\CatalogItemReference',
        'id' => 'integer',
        'onHand' => 'integer',
        'warehouse' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\WarehouseReference',
        'warehouseBin' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\WarehouseBinReference',
    ];
}
