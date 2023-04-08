<?php

namespace Spinen\ConnectWise\Models\v2019_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberDeactivationSalesActivity Version v2019_5
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
