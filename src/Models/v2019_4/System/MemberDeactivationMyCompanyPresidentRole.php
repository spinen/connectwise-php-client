<?php

namespace Spinen\ConnectWise\Models\v2019_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberDeactivationMyCompanyPresidentRole Version v2019_4
 *
 * Model for MemberDeactivationMyCompanyPresidentRole
 *
 * @property MemberReference $reAssignToMember
 * @property int $count
 */
class MemberDeactivationMyCompanyPresidentRole extends Model
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
