<?php

namespace Spinen\ConnectWise\Models\v2019_3\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CatalogPricing Version v2019_3
 *
 * Model for CatalogPricing
 *
 * @property Carbon\Carbon $date
 * @property CatalogItemReference $catalogItem
 * @property CompanyReference $company
 * @property SystemLocationReference $location
 * @property float $price
 * @property integer $quantity
 */
class CatalogPricing extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'catalogItem' => CatalogItemReference::class,
        'company' => CompanyReference::class,
        'date' => Carbon\Carbon::class,
        'location' => SystemLocationReference::class,
        'price' => 'float',
        'quantity' => 'integer',
    ];
}
