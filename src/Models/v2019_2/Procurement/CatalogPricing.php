<?php

namespace Spinen\ConnectWise\Models\v2019_2\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CatalogPricing Version v2019_2
 *
 * Model for CatalogPricing
 *
 * @property Carbon\Carbon $date
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\CatalogItemReference $catalogItem
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\SystemLocationReference $location
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
        'catalogItem' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\CatalogItemReference',
        'company' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\CompanyReference',
        'date' => 'Carbon\Carbon',
        'location' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\SystemLocationReference',
        'price' => 'float',
        'quantity' => 'integer',
    ];
}
