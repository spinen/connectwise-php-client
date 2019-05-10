<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberDeactivationSalesTeam Version v2019_2
 *
 * A list of Sales Teams to which the member is assigned
 *
 * @property Spinen\ConnectWise\Models\v2019_2\System\MemberReference $reAssignToMember
 * @property integer $count
 */
class MemberDeactivationSalesTeam extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'count' => 'integer',
        'reAssignToMember' => 'Spinen\ConnectWise\Models\v2019_2\System\MemberReference',
    ];
}
