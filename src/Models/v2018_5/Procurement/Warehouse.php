<?php

namespace Spinen\ConnectWise\Models\v2018_5\Procurement;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class Warehouse Version v2018_5
 *
 * Model for Warehouse
 *
 * @property CompanyReference $company
 * @property CurrencyReference $currency
 * @property MemberReference $manager
 * @property Metadata $_info
 * @property SiteReference $site
 * @property SystemDepartmentReference $department
 * @property SystemLocationReference $location
 * @property boolean $inactiveFlag
 * @property boolean $locationDefaultFlag
 * @property boolean $overallDefaultFlag
 * @property integer $id
 * @property string $locationXref
 * @property string $name
 */
class Warehouse extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'company' => CompanyReference::class,
        'currency' => CurrencyReference::class,
        'department' => SystemDepartmentReference::class,
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'location' => SystemLocationReference::class,
        'locationDefaultFlag' => 'boolean',
        'locationXref' => 'string',
        'manager' => MemberReference::class,
        'name' => 'string',
        'overallDefaultFlag' => 'boolean',
        'site' => SiteReference::class
    ];
}
