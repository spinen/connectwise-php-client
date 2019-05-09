<?php

namespace Spinen\ConnectWise\Models\v2018_6\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Team Version v2018_6
 * 
 * Model for Team
 *
 * @property integer $id
 * @property string $type
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\SalesTeamReference $salesTeam
 * @property integer $commissionPercent
 * @property boolean $referralFlag
 * @property integer $opportunityId
 * @property boolean $responsibleFlag
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\Metadata $_info
 */
class Team extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'type' => 'string',
        'member' => 'Spinen\ConnectWise\Models\v2018_6\Sales\MemberReference',
        'salesTeam' => 'Spinen\ConnectWise\Models\v2018_6\Sales\SalesTeamReference',
        'commissionPercent' => 'integer',
        'referralFlag' => 'boolean',
        'opportunityId' => 'integer',
        'responsibleFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Sales\Metadata',
    ];
}
