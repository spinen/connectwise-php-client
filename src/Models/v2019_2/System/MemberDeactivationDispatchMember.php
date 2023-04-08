<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberDeactivationDispatchMember Version v2019_2
 *
 * Model for MemberDeactivationDispatchMember
 *
 * @property MemberReference $reAssignToMember
 * @property int $count
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
        'reAssignToMember' => MemberReference::class,
    ];
}
