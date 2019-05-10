<?php

namespace Spinen\ConnectWise\Models\v2019_2\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SalesTeamMember Version v2019_2
 *
 * Model for SalesTeamMember
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\SystemLocationReference $location
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Sales\Metadata',
        'allowAccessFlag' => 'boolean',
        'department' => 'Spinen\ConnectWise\Models\v2019_2\Sales\SystemDepartmentReference',
        'id' => 'integer',
        'location' => 'Spinen\ConnectWise\Models\v2019_2\Sales\SystemLocationReference',
        'member' => 'Spinen\ConnectWise\Models\v2019_2\Sales\MemberReference',
    ];
}
