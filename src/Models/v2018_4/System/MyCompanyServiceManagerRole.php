<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class MyCompanyServiceManagerRole Version v2018_4
 *
 * Model for MyCompanyServiceManagerRole
 *
 * @property MemberReference $reAssignToMember
 * @property integer $count
 */
class MyCompanyServiceManagerRole extends Model
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
