<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceTeam Version v2018_4
 *
 * Model for ServiceTeam
 *
 * @property MemberReference $reAssignToMember
 * @property integer $count
 */
class ServiceTeam extends Model
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
