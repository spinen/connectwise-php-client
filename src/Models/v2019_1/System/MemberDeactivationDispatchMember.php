<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberDeactivationDispatchMember Version v2019_1
 *
 * Model for MemberDeactivationDispatchMember
 *
 * @property MemberReference $reAssignToMember
 * @property integer $count
 */
class MemberDeactivationDispatchMember extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'count' => 'integer',
        'reAssignToMember' => MemberReference::class
    ];
}
