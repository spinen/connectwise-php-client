<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class DutyManager Version v2018_4
 *
 * Model for DutyManager
 *
 * @property Spinen\ConnectWise\Models\v2018_4\System\MemberReference $reAssignToMember
 * @property integer $count
 */
class DutyManager extends Model
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
