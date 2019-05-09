<?php

namespace Spinen\ConnectWise\Models\v2018_5\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AdjustmentDetail Version v2018_5
 * 
 * Model for AdjustmentDetail
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_5\Procurement\CatalogItemReference $catalogItem
 * @property string $description
 * @property number $quantityOnHand
 * @property number $unitCost
 * @property Spinen\ConnectWise\Models\v2018_5\Procurement\WarehouseReference $warehouse
 * @property Spinen\ConnectWise\Models\v2018_5\Procurement\WarehouseBinReference $warehouseBin
 * @property integer $quantityAdjusted
 * @property string $serialNumber
 * @property Spinen\ConnectWise\Models\v2018_5\Procurement\AdjustmentReference $adjustment
 * @property Spinen\ConnectWise\Models\v2018_5\Procurement\Metadata $_info
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
        'catalogItem' => 'Spinen\ConnectWise\Models\v2018_5\Procurement\CatalogItemReference',
        'description' => 'string',
        'quantityOnHand' => 'number',
        'unitCost' => 'number',
        'warehouse' => 'Spinen\ConnectWise\Models\v2018_5\Procurement\WarehouseReference',
        'warehouseBin' => 'Spinen\ConnectWise\Models\v2018_5\Procurement\WarehouseBinReference',
        'quantityAdjusted' => 'integer',
        'serialNumber' => 'string',
        'adjustment' => 'Spinen\ConnectWise\Models\v2018_5\Procurement\AdjustmentReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Procurement\Metadata',
    ];
}
