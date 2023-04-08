<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberDeactivationStatusWorkflow Version v2019_1
 *
 * Model for MemberDeactivationStatusWorkflow
 *
 * @property MemberReference $reAssignToMember
 * @property int $count
 * @property int $id
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
        'reAssignToMember' => MemberReference::class,
    ];
}
