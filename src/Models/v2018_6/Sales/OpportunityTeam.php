<?php

namespace Spinen\ConnectWise\Models\v2018_6\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OpportunityTeam
 *
 * @property integer $id
 * @property string $type
 * @property integer $commissionPercent
 * @property boolean $referralFlag
 * @property integer $opportunityId
 * @property boolean $responsibleFlag
 */
class OpportunityTeam extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'type' => 'string',
        'commissionPercent' => 'integer',
        'referralFlag' => 'boolean',
        'opportunityId' => 'integer',
        'responsibleFlag' => 'boolean',
    ];
}
