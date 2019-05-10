<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberDeactivationDepartmentMananager Version v2019_3
 *
 * Model for MemberDeactivationDepartmentMananager
 *
 * @property MemberReference $reAssignToMember
 * @property integer $count
 */
class MemberDeactivationDepartmentMananager extends Model
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
