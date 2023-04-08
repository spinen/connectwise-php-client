<?php

namespace Spinen\ConnectWise\Models\v2019_5\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SalesQuota Version v2019_5
 *
 * Model for SalesQuota
 *
 * @property CurrencyReference $currency
 * @property MemberReference $member
 * @property Metadata $_info
 * @property ProductCategoryReference $category
 * @property ProductSubCategoryReference $subCategory
 * @property SystemDepartmentReference $department
 * @property SystemLocationReference $location
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
 * @property int $forecastYear
 * @property int $id
 */
class SalesQuota extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'aprilMargin' => 'float',
        'aprilRevenue' => 'float',
        'augustMargin' => 'float',
        'augustRevenue' => 'float',
        'category' => ProductCategoryReference::class,
        'currency' => CurrencyReference::class,
        'decemberMargin' => 'float',
        'decemberRevenue' => 'float',
        'department' => SystemDepartmentReference::class,
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
        'location' => SystemLocationReference::class,
        'marchMargin' => 'float',
        'marchRevenue' => 'float',
        'mayMargin' => 'float',
        'mayRevenue' => 'float',
        'member' => MemberReference::class,
        'novemberMargin' => 'float',
        'novemberRevenue' => 'float',
        'octoberMargin' => 'float',
        'octoberRevenue' => 'float',
        'septemberMargin' => 'float',
        'septemberRevenue' => 'float',
        'subCategory' => ProductSubCategoryReference::class,
    ];
}
