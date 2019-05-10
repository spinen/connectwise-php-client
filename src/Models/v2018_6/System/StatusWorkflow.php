<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class StatusWorkflow Version v2018_6
 *
 * Model for StatusWorkflow
 *
 * @property integer $count
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2018_6\System\MemberReference $reAssignToMember
 */
class StatusWorkflow extends Model
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
        'reAssignToMember' => 'Spinen\ConnectWise\Models\v2018_6\System\MemberReference',
    ];
}
