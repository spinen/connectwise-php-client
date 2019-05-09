<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanyTeam Version v2018_5
 * 
 * A list of customers for which the member holds a team role
 *
 * @property integer $count
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2018_5\System\MemberReference $reAssignToMember
 * @property Spinen\ConnectWise\Models\v2018_5\System\ContactReference $reAssignToContact
 */
class CompanyTeam extends Model
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
        'reAssignToMember' => 'Spinen\ConnectWise\Models\v2018_5\System\MemberReference',
        'reAssignToContact' => 'Spinen\ConnectWise\Models\v2018_5\System\ContactReference',
    ];
}
