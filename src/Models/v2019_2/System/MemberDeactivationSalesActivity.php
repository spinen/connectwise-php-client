<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberDeactivationSalesActivity Version v2019_2
 *
 * The List of Activities Assigned to the Member
 *
 * @property MemberReference $reAssignToMember
 * @property int $count
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
        'reAssignToMember' => MemberReference::class,
    ];
}
