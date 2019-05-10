<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberDeactivationCompanyTeam Version v2019_2
 *
 * A list of customers for which the member holds a team role
 *
 * @property ContactReference $reAssignToContact
 * @property MemberReference $reAssignToMember
 * @property integer $count
 * @property integer $id
 * @property string $name
 */
class MemberDeactivationCompanyTeam extends Model
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
        'reAssignToContact' => ContactReference::class,
        'reAssignToMember' => MemberReference::class,
    ];
}
