<?php

namespace Spinen\ConnectWise\Models\v2019_1\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SalesTeamMember Version v2019_1
 *
 * Model for SalesTeamMember
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\SystemLocationReference $location
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Sales\Metadata',
        'allowAccessFlag' => 'boolean',
        'department' => 'Spinen\ConnectWise\Models\v2019_1\Sales\SystemDepartmentReference',
        'id' => 'integer',
        'location' => 'Spinen\ConnectWise\Models\v2019_1\Sales\SystemLocationReference',
        'member' => 'Spinen\ConnectWise\Models\v2019_1\Sales\MemberReference',
    ];
}
