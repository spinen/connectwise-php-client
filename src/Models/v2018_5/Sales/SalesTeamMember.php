<?php

namespace Spinen\ConnectWise\Models\v2018_5\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SalesTeamMember Version v2018_5
 *
 * Model for SalesTeamMember
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\SystemDepartmentReference $department
 * @property boolean $allowAccessFlag
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\Metadata $_info
 */
class SalesTeamMember extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2018_5\Sales\MemberReference',
        'location' => 'Spinen\ConnectWise\Models\v2018_5\Sales\SystemLocationReference',
        'department' => 'Spinen\ConnectWise\Models\v2018_5\Sales\SystemDepartmentReference',
        'allowAccessFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Sales\Metadata',
    ];
}
