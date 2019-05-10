<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberDeactivationOpportunity Version v2019_2
 *
 * A list of the member's currently assigned Opportunities
 *
 * @property integer $count
 * @property Spinen\ConnectWise\Models\v2019_2\System\MemberReference $reAssignToMember
 */
class MemberDeactivationOpportunity extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'count' => 'integer',
        'reAssignToMember' => 'Spinen\ConnectWise\Models\v2019_2\System\MemberReference',
    ];
}
