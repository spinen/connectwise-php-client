<?php

namespace Spinen\ConnectWise\Models\v2019_1\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PurchasingDemand Version v2019_1
 *
 * Model for PurchasingDemand
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\WarehouseReference $warehouse
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\CompanyReference $vendor
 * @property array $products
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\PurchaseOrder $purchaseOrder
 */
class PurchasingDemand extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'warehouse' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\WarehouseReference',
        'vendor' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\CompanyReference',
        'products' => 'array',
        'purchaseOrder' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\PurchaseOrder',
    ];
}
