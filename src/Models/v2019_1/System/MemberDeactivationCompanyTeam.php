<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberDeactivationCompanyTeam Version v2019_1
 * 
 * A list of customers for which the member holds a team role
 *
 * @property integer $count
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2019_1\System\MemberReference $reAssignToMember
 * @property Spinen\ConnectWise\Models\v2019_1\System\ContactReference $reAssignToContact
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
        'reAssignToMember' => 'Spinen\ConnectWise\Models\v2019_1\System\MemberReference',
        'reAssignToContact' => 'Spinen\ConnectWise\Models\v2019_1\System\ContactReference',
    ];
}
