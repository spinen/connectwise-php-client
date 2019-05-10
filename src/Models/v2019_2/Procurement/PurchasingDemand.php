<?php

namespace Spinen\ConnectWise\Models\v2019_2\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PurchasingDemand Version v2019_2
 *
 * Model for PurchasingDemand
 *
 * @property CompanyReference $vendor
 * @property PurchaseOrder $purchaseOrder
 * @property WarehouseReference $warehouse
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
        'purchaseOrder' => PurchaseOrder::class,
        'vendor' => CompanyReference::class,
        'warehouse' => WarehouseReference::class,
    ];
}
