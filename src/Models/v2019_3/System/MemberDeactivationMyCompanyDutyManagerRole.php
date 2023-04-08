<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberDeactivationMyCompanyDutyManagerRole Version v2019_3
 *
 * Model for MemberDeactivationMyCompanyDutyManagerRole
 *
 * @property MemberReference $reAssignToMember
 * @property int $count
 */
class MemberDeactivationMyCompanyDutyManagerRole extends Model
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
