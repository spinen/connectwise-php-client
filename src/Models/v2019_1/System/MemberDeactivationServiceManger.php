<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberDeactivationServiceManger Version v2019_1
 *
 * Model for MemberDeactivationServiceManger
 *
 * @property MemberReference $reAssignToMember
 * @property int $count
 */
class MemberDeactivationServiceManger extends Model
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
