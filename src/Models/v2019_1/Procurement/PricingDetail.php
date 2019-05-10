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
 * @property CatalogItemReference $product
 * @property Metadata $_info
 * @property ProductCategoryReference $category
 * @property ProductSubCategoryReference $subCategory
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
        '_info' => Metadata::class,
        'category' => ProductCategoryReference::class,
        'endDate' => Carbon\Carbon::class,
        'id' => 'integer',
        'noEndDate' => 'boolean',
        'product' => CatalogItemReference::class,
        'startDate' => Carbon\Carbon::class,
        'subCategory' => ProductSubCategoryReference::class,
    ];
}
