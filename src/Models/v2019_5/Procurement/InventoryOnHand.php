<?php

namespace Spinen\ConnectWise\Models\v2019_5\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class InventoryOnHand Version v2019_5
 *
 * Model for InventoryOnHand
 *
 * @property CatalogItemReference $catalogItem
 * @property Metadata $_info
 * @property WarehouseBinReference $warehouseBin
 * @property WarehouseReference $warehouse
 * @property array $serialNumbers
 * @property int $id
 * @property int $onHand
 */
class InventoryOnHand extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'catalogItem' => CatalogItemReference::class,
        'id' => 'integer',
        'onHand' => 'integer',
        'serialNumbers' => 'array',
        'warehouse' => WarehouseReference::class,
        'warehouseBin' => WarehouseBinReference::class,
    ];
}
