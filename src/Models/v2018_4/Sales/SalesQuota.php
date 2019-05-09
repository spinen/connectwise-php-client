<?php

namespace Spinen\ConnectWise\Models\v2018_4\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SalesQuota Version v2018_4
 * 
 * Model for SalesQuota
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\MemberReference $member
 * @property integer $forecastYear
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\ProductCategoryReference $category
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\ProductSubCategoryReference $subCategory
 * @property number $januaryRevenue
 * @property number $januaryMargin
 * @property number $februaryRevenue
 * @property number $februaryMargin
 * @property number $marchRevenue
 * @property number $marchMargin
 * @property number $aprilRevenue
 * @property number $aprilMargin
 * @property number $mayRevenue
 * @property number $mayMargin
 * @property number $juneRevenue
 * @property number $juneMargin
 * @property number $julyRevenue
 * @property number $julyMargin
 * @property number $augustRevenue
 * @property number $augustMargin
 * @property number $septemberRevenue
 * @property number $septemberMargin
 * @property number $octoberRevenue
 * @property number $octoberMargin
 * @property number $novemberRevenue
 * @property number $novemberMargin
 * @property number $decemberRevenue
 * @property number $decemberMargin
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\Metadata $_info
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
        'member' => 'Spinen\ConnectWise\Models\v2018_4\Sales\MemberReference',
        'forecastYear' => 'integer',
        'location' => 'Spinen\ConnectWise\Models\v2018_4\Sales\SystemLocationReference',
        'department' => 'Spinen\ConnectWise\Models\v2018_4\Sales\SystemDepartmentReference',
        'category' => 'Spinen\ConnectWise\Models\v2018_4\Sales\ProductCategoryReference',
        'subCategory' => 'Spinen\ConnectWise\Models\v2018_4\Sales\ProductSubCategoryReference',
        'januaryRevenue' => 'number',
        'januaryMargin' => 'number',
        'februaryRevenue' => 'number',
        'februaryMargin' => 'number',
        'marchRevenue' => 'number',
        'marchMargin' => 'number',
        'aprilRevenue' => 'number',
        'aprilMargin' => 'number',
        'mayRevenue' => 'number',
        'mayMargin' => 'number',
        'juneRevenue' => 'number',
        'juneMargin' => 'number',
        'julyRevenue' => 'number',
        'julyMargin' => 'number',
        'augustRevenue' => 'number',
        'augustMargin' => 'number',
        'septemberRevenue' => 'number',
        'septemberMargin' => 'number',
        'octoberRevenue' => 'number',
        'octoberMargin' => 'number',
        'novemberRevenue' => 'number',
        'novemberMargin' => 'number',
        'decemberRevenue' => 'number',
        'decemberMargin' => 'number',
        'currency' => 'Spinen\ConnectWise\Models\v2018_4\Sales\CurrencyReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Sales\Metadata',
    ];
}
