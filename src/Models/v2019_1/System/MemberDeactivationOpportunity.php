<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberDeactivationOpportunity Version v2019_1
 *
 * A list of the member's currently assigned Opportunities
 *
 * @property MemberReference $reAssignToMember
 * @property int $count
 */
class MemberDeactivationOpportunity extends Model
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
