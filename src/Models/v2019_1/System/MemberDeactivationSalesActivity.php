<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberDeactivationSalesActivity Version v2019_1
 * 
 * The List of Activities Assigned to the Member
 *
 * @property integer $count
 * @property Spinen\ConnectWise\Models\v2019_1\System\MemberReference $reAssignToMember
 */
class MemberDeactivationSalesActivity extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'count' => 'integer',
        'reAssignToMember' => 'Spinen\ConnectWise\Models\v2019_1\System\MemberReference',
    ];
}
