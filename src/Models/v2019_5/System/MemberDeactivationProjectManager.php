<?php

namespace Spinen\ConnectWise\Models\v2019_5\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberDeactivationProjectManager Version v2019_5
 *
 * A list of Projects that the member is the project manager
 *
 * @property MemberReference $reAssignToMember
 * @property integer $count
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
        'reAssignToMember' => MemberReference::class
    ];
}
