<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberDeactivationServiceTemplate Version v2019_1
 * 
 * The Service (Ticket) Templates on which the Member is the assignedTo resource
 *
 * @property integer $count
 * @property Spinen\ConnectWise\Models\v2019_1\System\MemberReference $reAssignToMember
 */
class MemberDeactivationServiceTemplate extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'count' => 'integer',
        'reAssignToMember' => 'Spinen\ConnectWise\Models\v2019_1\System\MemberReference',
    ];
}
