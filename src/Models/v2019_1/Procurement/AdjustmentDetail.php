<?php

namespace Spinen\ConnectWise\Models\v2019_1\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AdjustmentDetail Version v2019_1
 *
 * Model for AdjustmentDetail
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\CatalogItemReference $catalogItem
 * @property string $description
 * @property float $quantityOnHand
 * @property float $unitCost
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\WarehouseReference $warehouse
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\WarehouseBinReference $warehouseBin
 * @property integer $quantityAdjusted
 * @property string $serialNumber
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\AdjustmentReference $adjustment
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\Metadata $_info
 */
class AdjustmentDetail extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'catalogItem' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\CatalogItemReference',
        'description' => 'string',
        'quantityOnHand' => 'float',
        'unitCost' => 'float',
        'warehouse' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\WarehouseReference',
        'warehouseBin' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\WarehouseBinReference',
        'quantityAdjusted' => 'integer',
        'serialNumber' => 'string',
        'adjustment' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\AdjustmentReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\Metadata',
    ];
}
