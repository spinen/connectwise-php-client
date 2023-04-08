<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceTemplate Version v2018_6
 *
 * The Service (Ticket) Templates on which the Member is the assignedTo resource
 *
 * @property MemberReference $reAssignToMember
 * @property int $count
 */
class ServiceTemplate extends Model
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
