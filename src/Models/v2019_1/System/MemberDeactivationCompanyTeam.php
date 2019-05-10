<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberDeactivationCompanyTeam Version v2019_1
 *
 * A list of customers for which the member holds a team role
 *
 * @property Spinen\ConnectWise\Models\v2019_1\System\ContactReference $reAssignToContact
 * @property Spinen\ConnectWise\Models\v2019_1\System\MemberReference $reAssignToMember
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
        'reAssignToContact' => 'Spinen\ConnectWise\Models\v2019_1\System\ContactReference',
        'reAssignToMember' => 'Spinen\ConnectWise\Models\v2019_1\System\MemberReference',
    ];
}
