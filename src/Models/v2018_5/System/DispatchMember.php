<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class DispatchMember Version v2018_5
 *
 * Model for DispatchMember
 *
 * @property MemberReference $reAssignToMember
 * @property integer $count
 */
class DispatchMember extends Model
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
