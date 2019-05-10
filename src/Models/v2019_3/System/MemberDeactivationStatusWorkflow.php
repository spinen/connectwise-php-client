<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberDeactivationStatusWorkflow Version v2019_3
 *
 * Model for MemberDeactivationStatusWorkflow
 *
 * @property Spinen\ConnectWise\Models\v2019_3\System\MemberReference $reAssignToMember
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
        'reAssignToMember' => 'Spinen\ConnectWise\Models\v2019_3\System\MemberReference',
    ];
}
