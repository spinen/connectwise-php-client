<?php

namespace Spinen\ConnectWise\Models\v2018_4\Sales;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class Team Version v2018_4
 *
 * Model for Team
 *
 * @property MemberReference $member
 * @property Metadata $_info
 * @property SalesTeamReference $salesTeam
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
        '_info' => Metadata::class,
        'commissionPercent' => 'integer',
        'id' => 'integer',
        'member' => MemberReference::class,
        'opportunityId' => 'integer',
        'referralFlag' => 'boolean',
        'responsibleFlag' => 'boolean',
        'salesTeam' => SalesTeamReference::class,
        'type' => 'string'
    ];
}
