<?php

namespace Spinen\ConnectWise\Models\v2019_4\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Warehouse Version v2019_4
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
 * @property bool $inactiveFlag
 * @property bool $locationDefaultFlag
 * @property bool $overallDefaultFlag
 * @property int $id
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
        'site' => SiteReference::class,
    ];
}
