<?php

namespace Spinen\ConnectWise\Models\v2019_2\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AdjustmentDetail Version v2019_2
 * 
 * Model for AdjustmentDetail
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\CatalogItemReference $catalogItem
 * @property string $description
 * @property number $quantityOnHand
 * @property number $unitCost
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\WarehouseReference $warehouse
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\WarehouseBinReference $warehouseBin
 * @property integer $quantityAdjusted
 * @property string $serialNumber
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\AdjustmentReference $adjustment
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\Metadata $_info
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
        'catalogItem' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\CatalogItemReference',
        'description' => 'string',
        'quantityOnHand' => 'number',
        'unitCost' => 'number',
        'warehouse' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\WarehouseReference',
        'warehouseBin' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\WarehouseBinReference',
        'quantityAdjusted' => 'integer',
        'serialNumber' => 'string',
        'adjustment' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\AdjustmentReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\Metadata',
    ];
}
