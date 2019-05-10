<?php

namespace Spinen\ConnectWise\Models\v2018_4\Procurement;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class AdjustmentDetail Version v2018_4
 *
 * Model for AdjustmentDetail
 *
 * @property AdjustmentReference $adjustment
 * @property CatalogItemReference $catalogItem
 * @property Metadata $_info
 * @property WarehouseBinReference $warehouseBin
 * @property WarehouseReference $warehouse
 * @property float $quantityOnHand
 * @property float $unitCost
 * @property integer $id
 * @property integer $quantityAdjusted
 * @property string $description
 * @property string $serialNumber
 */
class AdjustmentDetail extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'adjustment' => AdjustmentReference::class,
        'catalogItem' => CatalogItemReference::class,
        'description' => 'string',
        'id' => 'integer',
        'quantityAdjusted' => 'integer',
        'quantityOnHand' => 'float',
        'serialNumber' => 'string',
        'unitCost' => 'float',
        'warehouse' => WarehouseReference::class,
        'warehouseBin' => WarehouseBinReference::class
    ];
}
