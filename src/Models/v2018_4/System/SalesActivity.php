<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SalesActivity Version v2018_4
 *
 * The List of Activities Assigned to the Member
 *
 * @property MemberReference $reAssignToMember
 * @property int $count
 */
class SalesActivity extends Model
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
