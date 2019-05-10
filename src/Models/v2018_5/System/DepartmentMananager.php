<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class DepartmentMananager Version v2018_5
 *
 * Model for DepartmentMananager
 *
 * @property MemberReference $reAssignToMember
 * @property integer $count
 */
class DepartmentMananager extends Model
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
