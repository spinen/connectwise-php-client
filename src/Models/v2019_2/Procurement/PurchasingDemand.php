<?php

namespace Spinen\ConnectWise\Models\v2019_2\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PurchasingDemand Version v2019_2
 *
 * Model for PurchasingDemand
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\CompanyReference $vendor
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\PurchaseOrder $purchaseOrder
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\WarehouseReference $warehouse
 * @property array $products
 */
class PurchasingDemand extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'products' => 'array',
        'purchaseOrder' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\PurchaseOrder',
        'vendor' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\CompanyReference',
        'warehouse' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\WarehouseReference',
    ];
}
