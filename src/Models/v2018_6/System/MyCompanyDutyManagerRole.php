<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MyCompanyDutyManagerRole Version v2018_6
 *
 * Model for MyCompanyDutyManagerRole
 *
 * @property Spinen\ConnectWise\Models\v2018_6\System\MemberReference $reAssignToMember
 * @property integer $count
 */
class MyCompanyDutyManagerRole extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'count' => 'integer',
        'reAssignToMember' => 'Spinen\ConnectWise\Models\v2018_6\System\MemberReference',
    ];
}
