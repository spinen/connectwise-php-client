<?php

namespace Spinen\ConnectWise\Models\v2019_2\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SalesQuota Version v2019_2
 * 
 * Model for SalesQuota
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\MemberReference $member
 * @property integer $forecastYear
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\ProductCategoryReference $category
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\ProductSubCategoryReference $subCategory
 * @property float $januaryRevenue
 * @property float $januaryMargin
 * @property float $februaryRevenue
 * @property float $februaryMargin
 * @property float $marchRevenue
 * @property float $marchMargin
 * @property float $aprilRevenue
 * @property float $aprilMargin
 * @property float $mayRevenue
 * @property float $mayMargin
 * @property float $juneRevenue
 * @property float $juneMargin
 * @property float $julyRevenue
 * @property float $julyMargin
 * @property float $augustRevenue
 * @property float $augustMargin
 * @property float $septemberRevenue
 * @property float $septemberMargin
 * @property float $octoberRevenue
 * @property float $octoberMargin
 * @property float $novemberRevenue
 * @property float $novemberMargin
 * @property float $decemberRevenue
 * @property float $decemberMargin
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\Metadata $_info
 */
class SalesQuota extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2019_2\Sales\MemberReference',
        'forecastYear' => 'integer',
        'location' => 'Spinen\ConnectWise\Models\v2019_2\Sales\SystemLocationReference',
        'department' => 'Spinen\ConnectWise\Models\v2019_2\Sales\SystemDepartmentReference',
        'category' => 'Spinen\ConnectWise\Models\v2019_2\Sales\ProductCategoryReference',
        'subCategory' => 'Spinen\ConnectWise\Models\v2019_2\Sales\ProductSubCategoryReference',
        'januaryRevenue' => 'float',
        'januaryMargin' => 'float',
        'februaryRevenue' => 'float',
        'februaryMargin' => 'float',
        'marchRevenue' => 'float',
        'marchMargin' => 'float',
        'aprilRevenue' => 'float',
        'aprilMargin' => 'float',
        'mayRevenue' => 'float',
        'mayMargin' => 'float',
        'juneRevenue' => 'float',
        'juneMargin' => 'float',
        'julyRevenue' => 'float',
        'julyMargin' => 'float',
        'augustRevenue' => 'float',
        'augustMargin' => 'float',
        'septemberRevenue' => 'float',
        'septemberMargin' => 'float',
        'octoberRevenue' => 'float',
        'octoberMargin' => 'float',
        'novemberRevenue' => 'float',
        'novemberMargin' => 'float',
        'decemberRevenue' => 'float',
        'decemberMargin' => 'float',
        'currency' => 'Spinen\ConnectWise\Models\v2019_2\Sales\CurrencyReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Sales\Metadata',
    ];
}
