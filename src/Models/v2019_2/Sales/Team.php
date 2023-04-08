<?php

namespace Spinen\ConnectWise\Models\v2019_2\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Team Version v2019_2
 *
 * Model for Team
 *
 * @property MemberReference $member
 * @property Metadata $_info
 * @property SalesTeamReference $salesTeam
 * @property bool $referralFlag
 * @property bool $responsibleFlag
 * @property int $commissionPercent
 * @property int $id
 * @property int $opportunityId
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
        'type' => 'string',
    ];
}
