<?php

namespace Spinen\ConnectWise\Models\v2019_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberDeactivationMyCompanyControllerRole Version v2019_4
 *
 * Model for MemberDeactivationMyCompanyControllerRole
 *
 * @property MemberReference $reAssignToMember
 * @property int $count
 */
class MemberDeactivationMyCompanyControllerRole extends Model
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
