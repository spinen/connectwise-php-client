<?php

namespace Spinen\ConnectWise\Models\v2019_3\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SalesQuota
 *
 * @property integer $id
 * @property integer $forecastYear
 * @property double $januaryRevenue
 * @property double $januaryMargin
 * @property double $februaryRevenue
 * @property double $februaryMargin
 * @property double $marchRevenue
 * @property double $marchMargin
 * @property double $aprilRevenue
 * @property double $aprilMargin
 * @property double $mayRevenue
 * @property double $mayMargin
 * @property double $juneRevenue
 * @property double $juneMargin
 * @property double $julyRevenue
 * @property double $julyMargin
 * @property double $augustRevenue
 * @property double $augustMargin
 * @property double $septemberRevenue
 * @property double $septemberMargin
 * @property double $octoberRevenue
 * @property double $octoberMargin
 * @property double $novemberRevenue
 * @property double $novemberMargin
 * @property double $decemberRevenue
 * @property double $decemberMargin
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
        'forecastYear' => 'integer',
        'januaryRevenue' => 'double',
        'januaryMargin' => 'double',
        'februaryRevenue' => 'double',
        'februaryMargin' => 'double',
        'marchRevenue' => 'double',
        'marchMargin' => 'double',
        'aprilRevenue' => 'double',
        'aprilMargin' => 'double',
        'mayRevenue' => 'double',
        'mayMargin' => 'double',
        'juneRevenue' => 'double',
        'juneMargin' => 'double',
        'julyRevenue' => 'double',
        'julyMargin' => 'double',
        'augustRevenue' => 'double',
        'augustMargin' => 'double',
        'septemberRevenue' => 'double',
        'septemberMargin' => 'double',
        'octoberRevenue' => 'double',
        'octoberMargin' => 'double',
        'novemberRevenue' => 'double',
        'novemberMargin' => 'double',
        'decemberRevenue' => 'double',
        'decemberMargin' => 'double',
    ];
}
