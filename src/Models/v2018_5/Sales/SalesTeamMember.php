<?php

namespace Spinen\ConnectWise\Models\v2018_5\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SalesTeamMember Version v2018_5
 *
 * Model for SalesTeamMember
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\SystemLocationReference $location
 * @property boolean $allowAccessFlag
 * @property integer $id
 */
class SalesTeamMember extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Sales\Metadata',
        'allowAccessFlag' => 'boolean',
        'department' => 'Spinen\ConnectWise\Models\v2018_5\Sales\SystemDepartmentReference',
        'id' => 'integer',
        'location' => 'Spinen\ConnectWise\Models\v2018_5\Sales\SystemLocationReference',
        'member' => 'Spinen\ConnectWise\Models\v2018_5\Sales\MemberReference',
    ];
}
