<?php

namespace Spinen\ConnectWise\Models\v2019_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberDeactivationProjectManager Version v2019_4
 *
 * A list of Projects that the member is the project manager
 *
 * @property MemberReference $reAssignToMember
 * @property int $count
 */
class MemberDeactivationProjectManager extends Model
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
