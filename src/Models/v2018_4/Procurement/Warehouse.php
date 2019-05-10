<?php

namespace Spinen\ConnectWise\Models\v2018_4\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Warehouse Version v2018_4
 *
 * Model for Warehouse
 *
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\MemberReference $manager
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\SiteReference $site
 * @property string $locationXref
 * @property boolean $locationDefaultFlag
 * @property boolean $overallDefaultFlag
 * @property boolean $inactiveFlag
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\Metadata $_info
 */
class Warehouse extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'company' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\CompanyReference',
        'location' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\SystemLocationReference',
        'department' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\SystemDepartmentReference',
        'manager' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\MemberReference',
        'site' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\SiteReference',
        'locationXref' => 'string',
        'locationDefaultFlag' => 'boolean',
        'overallDefaultFlag' => 'boolean',
        'inactiveFlag' => 'boolean',
        'currency' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\CurrencyReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\Metadata',
    ];
}
