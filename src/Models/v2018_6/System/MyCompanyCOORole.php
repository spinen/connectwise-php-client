<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MyCompanyCOORole Version v2018_6
 *
 * Model for MyCompanyCOORole
 *
 * @property MemberReference $reAssignToMember
 * @property int $count
 */
class MyCompanyCOORole extends Model
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
