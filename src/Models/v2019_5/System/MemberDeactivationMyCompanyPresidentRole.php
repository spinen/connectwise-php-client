<?php

namespace Spinen\ConnectWise\Models\v2019_5\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberDeactivationMyCompanyPresidentRole Version v2019_5
 *
 * Model for MemberDeactivationMyCompanyPresidentRole
 *
 * @property MemberReference $reAssignToMember
 * @property integer $count
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
        'reAssignToMember' => MemberReference::class
    ];
}
