<?php

namespace Spinen\ConnectWise\Models\v2019_2\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SalesQuota Version v2019_2
 *
 * Model for SalesQuota
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\ProductCategoryReference $category
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\ProductSubCategoryReference $subCategory
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\SystemLocationReference $location
 * @property float $aprilMargin
 * @property float $aprilRevenue
 * @property float $augustMargin
 * @property float $augustRevenue
 * @property float $decemberMargin
 * @property float $decemberRevenue
 * @property float $februaryMargin
 * @property float $februaryRevenue
 * @property float $januaryMargin
 * @property float $januaryRevenue
 * @property float $julyMargin
 * @property float $julyRevenue
 * @property float $juneMargin
 * @property float $juneRevenue
 * @property float $marchMargin
 * @property float $marchRevenue
 * @property float $mayMargin
 * @property float $mayRevenue
 * @property float $novemberMargin
 * @property float $novemberRevenue
 * @property float $octoberMargin
 * @property float $octoberRevenue
 * @property float $septemberMargin
 * @property float $septemberRevenue
 * @property integer $forecastYear
 * @property integer $id
 */
class SalesQuota extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Sales\Metadata',
        'aprilMargin' => 'float',
        'aprilRevenue' => 'float',
        'augustMargin' => 'float',
        'augustRevenue' => 'float',
        'category' => 'Spinen\ConnectWise\Models\v2019_2\Sales\ProductCategoryReference',
        'currency' => 'Spinen\ConnectWise\Models\v2019_2\Sales\CurrencyReference',
        'decemberMargin' => 'float',
        'decemberRevenue' => 'float',
        'department' => 'Spinen\ConnectWise\Models\v2019_2\Sales\SystemDepartmentReference',
        'februaryMargin' => 'float',
        'februaryRevenue' => 'float',
        'forecastYear' => 'integer',
        'id' => 'integer',
        'januaryMargin' => 'float',
        'januaryRevenue' => 'float',
        'julyMargin' => 'float',
        'julyRevenue' => 'float',
        'juneMargin' => 'float',
        'juneRevenue' => 'float',
        'location' => 'Spinen\ConnectWise\Models\v2019_2\Sales\SystemLocationReference',
        'marchMargin' => 'float',
        'marchRevenue' => 'float',
        'mayMargin' => 'float',
        'mayRevenue' => 'float',
        'member' => 'Spinen\ConnectWise\Models\v2019_2\Sales\MemberReference',
        'novemberMargin' => 'float',
        'novemberRevenue' => 'float',
        'octoberMargin' => 'float',
        'octoberRevenue' => 'float',
        'septemberMargin' => 'float',
        'septemberRevenue' => 'float',
        'subCategory' => 'Spinen\ConnectWise\Models\v2019_2\Sales\ProductSubCategoryReference',
    ];
}
