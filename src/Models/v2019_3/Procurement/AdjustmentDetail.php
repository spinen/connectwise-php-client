<?php

namespace Spinen\ConnectWise\Models\v2019_3\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AdjustmentDetail Version v2019_3
 *
 * Model for AdjustmentDetail
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Procurement\AdjustmentReference $adjustment
 * @property Spinen\ConnectWise\Models\v2019_3\Procurement\CatalogItemReference $catalogItem
 * @property Spinen\ConnectWise\Models\v2019_3\Procurement\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_3\Procurement\WarehouseBinReference $warehouseBin
 * @property Spinen\ConnectWise\Models\v2019_3\Procurement\WarehouseReference $warehouse
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Procurement\Metadata',
        'adjustment' => 'Spinen\ConnectWise\Models\v2019_3\Procurement\AdjustmentReference',
        'catalogItem' => 'Spinen\ConnectWise\Models\v2019_3\Procurement\CatalogItemReference',
        'description' => 'string',
        'id' => 'integer',
        'quantityAdjusted' => 'integer',
        'quantityOnHand' => 'float',
        'serialNumber' => 'string',
        'unitCost' => 'float',
        'warehouse' => 'Spinen\ConnectWise\Models\v2019_3\Procurement\WarehouseReference',
        'warehouseBin' => 'Spinen\ConnectWise\Models\v2019_3\Procurement\WarehouseBinReference',
    ];
}
