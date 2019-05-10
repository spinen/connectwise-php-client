<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanyTeam Version v2018_4
 *
 * A list of customers for which the member holds a team role
 *
 * @property Spinen\ConnectWise\Models\v2018_4\System\ContactReference $reAssignToContact
 * @property Spinen\ConnectWise\Models\v2018_4\System\MemberReference $reAssignToMember
 * @property integer $count
 * @property integer $id
 * @property string $name
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
        'reAssignToContact' => 'Spinen\ConnectWise\Models\v2018_4\System\ContactReference',
        'reAssignToMember' => 'Spinen\ConnectWise\Models\v2018_4\System\MemberReference',
    ];
}
