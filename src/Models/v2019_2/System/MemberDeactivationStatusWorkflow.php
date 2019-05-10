<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberDeactivationStatusWorkflow Version v2019_2
 *
 * Model for MemberDeactivationStatusWorkflow
 *
 * @property MemberReference $reAssignToMember
 * @property integer $count
 * @property integer $id
 * @property string $name
 */
class MemberDeactivationStatusWorkflow extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'count' => 'integer',
        'id' => 'integer',
        'name' => 'string',
        'reAssignToMember' => MemberReference::class
    ];
}
