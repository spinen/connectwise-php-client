<?php

namespace Spinen\ConnectWise\Models\v2019_2\Sales;

use Spinen\ConnectWise\Support\Model;

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
