<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MyCompanyDispatchRole Version v2018_6
 *
 * Model for MyCompanyDispatchRole
 *
 * @property MemberReference $reAssignToMember
 * @property integer $count
 */
class MyCompanyDispatchRole extends Model
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
