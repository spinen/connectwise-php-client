<?php

namespace Spinen\ConnectWise\Models\v2019_2\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PricingDetail Version v2019_2
 * 
 * Model for PricingDetail
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\CatalogItemReference $product
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\ProductCategoryReference $category
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\ProductSubCategoryReference $subCategory
 * @property Carbon\Carbon $startDate
 * @property Carbon\Carbon $endDate
 * @property boolean $noEndDate
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\Metadata $_info
 */
class PricingDetail extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'product' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\CatalogItemReference',
        'category' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\ProductCategoryReference',
        'subCategory' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\ProductSubCategoryReference',
        'startDate' => 'Carbon\Carbon',
        'endDate' => 'Carbon\Carbon',
        'noEndDate' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\Metadata',
    ];
}
