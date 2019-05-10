<?php

namespace Spinen\ConnectWise\Models\v2019_3\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CatalogPricing Version v2019_3
 *
 * Model for CatalogPricing
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Procurement\CatalogItemReference $catalogItem
 * @property Spinen\ConnectWise\Models\v2019_3\Procurement\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_3\Procurement\SystemLocationReference $location
 * @property integer $quantity
 * @property Carbon\Carbon $date
 * @property float $price
 */
class CatalogPricing extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'catalogItem' => 'Spinen\ConnectWise\Models\v2019_3\Procurement\CatalogItemReference',
        'company' => 'Spinen\ConnectWise\Models\v2019_3\Procurement\CompanyReference',
        'location' => 'Spinen\ConnectWise\Models\v2019_3\Procurement\SystemLocationReference',
        'quantity' => 'integer',
        'date' => 'Carbon\Carbon',
        'price' => 'float',
    ];
}
