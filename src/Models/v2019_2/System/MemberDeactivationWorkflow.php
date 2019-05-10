<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberDeactivationWorkflow Version v2019_2
 *
 * The Workflows to which the member is assigned
 *
 * @property MemberReference $reAssignToMember
 * @property integer $count
 */
class MemberDeactivationWorkflow extends Model
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
