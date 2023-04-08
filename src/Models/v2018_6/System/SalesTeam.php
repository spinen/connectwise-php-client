<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SalesTeam Version v2018_6
 *
 * A list of Sales Teams to which the member is assigned
 *
 * @property MemberReference $reAssignToMember
 * @property int $count
 */
class SalesTeam extends Model
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
