<?php

namespace Spinen\ConnectWise\Models\v2019_3\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Team Version v2019_3
 *
 * Model for Team
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\SalesTeamReference $salesTeam
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Sales\Metadata',
        'commissionPercent' => 'integer',
        'id' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2019_3\Sales\MemberReference',
        'opportunityId' => 'integer',
        'referralFlag' => 'boolean',
        'responsibleFlag' => 'boolean',
        'salesTeam' => 'Spinen\ConnectWise\Models\v2019_3\Sales\SalesTeamReference',
        'type' => 'string',
    ];
}
