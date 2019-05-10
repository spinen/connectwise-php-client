<?php

namespace Spinen\ConnectWise\Models\v2019_1\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PricingDetail Version v2019_1
 *
 * Model for PricingDetail
 *
 * @property Carbon\Carbon $endDate
 * @property Carbon\Carbon $startDate
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\CatalogItemReference $product
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\ProductCategoryReference $category
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\ProductSubCategoryReference $subCategory
 * @property boolean $noEndDate
 * @property integer $id
 */
class PricingDetail extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\Metadata',
        'category' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\ProductCategoryReference',
        'endDate' => 'Carbon\Carbon',
        'id' => 'integer',
        'noEndDate' => 'boolean',
        'product' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\CatalogItemReference',
        'startDate' => 'Carbon\Carbon',
        'subCategory' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\ProductSubCategoryReference',
    ];
}
