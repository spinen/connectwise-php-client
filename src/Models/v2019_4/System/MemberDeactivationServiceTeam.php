<?php

namespace Spinen\ConnectWise\Models\v2019_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberDeactivationServiceTeam Version v2019_4
 *
 * Model for MemberDeactivationServiceTeam
 *
 * @property MemberReference $reAssignToMember
 * @property int $count
 */
class MemberDeactivationServiceTeam extends Model
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
