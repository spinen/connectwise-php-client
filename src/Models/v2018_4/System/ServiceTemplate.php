<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceTemplate Version v2018_4
 * 
 * The Service (Ticket) Templates on which the Member is the assignedTo resource
 *
 * @property integer $count
 * @property Spinen\ConnectWise\Models\v2018_4\System\MemberReference $reAssignToMember
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
        'reAssignToMember' => 'Spinen\ConnectWise\Models\v2018_4\System\MemberReference',
    ];
}
