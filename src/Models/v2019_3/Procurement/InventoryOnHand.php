<?php

namespace Spinen\ConnectWise\Models\v2019_3\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class InventoryOnHand Version v2019_3
 *
 * Model for InventoryOnHand
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Procurement\CatalogItemReference $catalogItem
 * @property Spinen\ConnectWise\Models\v2019_3\Procurement\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_3\Procurement\WarehouseBinReference $warehouseBin
 * @property Spinen\ConnectWise\Models\v2019_3\Procurement\WarehouseReference $warehouse
 * @property array $serialNumbers
 * @property integer $id
 * @property integer $onHand
 */
class InventoryOnHand extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Procurement\Metadata',
        'catalogItem' => 'Spinen\ConnectWise\Models\v2019_3\Procurement\CatalogItemReference',
        'id' => 'integer',
        'onHand' => 'integer',
        'serialNumbers' => 'array',
        'warehouse' => 'Spinen\ConnectWise\Models\v2019_3\Procurement\WarehouseReference',
        'warehouseBin' => 'Spinen\ConnectWise\Models\v2019_3\Procurement\WarehouseBinReference',
    ];
}
