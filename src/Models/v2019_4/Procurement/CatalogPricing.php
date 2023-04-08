<?php

namespace Spinen\ConnectWise\Models\v2019_4\Procurement;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class CatalogPricing Version v2019_4
 *
 * Model for CatalogPricing
 *
 * @property Carbon $date
 * @property CatalogItemReference $catalogItem
 * @property CompanyReference $company
 * @property SystemLocationReference $location
 * @property float $price
 * @property int $quantity
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
        'date' => Carbon::class,
        'location' => SystemLocationReference::class,
        'price' => 'float',
        'quantity' => 'integer',
    ];
}
