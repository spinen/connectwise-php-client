<?php

namespace Spinen\ConnectWise\Models\v2018_5\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Team Version v2018_5
 *
 * Model for Team
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\SalesTeamReference $salesTeam
 * @property boolean $referralFlag
 * @property boolean $responsibleFlag
 * @property integer $commissionPercent
 * @property integer $id
 * @property integer $opportunityId
 * @property string $type
 */
class Team extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Sales\Metadata',
        'commissionPercent' => 'integer',
        'id' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2018_5\Sales\MemberReference',
        'opportunityId' => 'integer',
        'referralFlag' => 'boolean',
        'responsibleFlag' => 'boolean',
        'salesTeam' => 'Spinen\ConnectWise\Models\v2018_5\Sales\SalesTeamReference',
        'type' => 'string',
    ];
}
