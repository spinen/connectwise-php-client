<?php

namespace Spinen\ConnectWise\Models\v2019_5\Sales;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class OpportunityStage Version v2019_5
 *
 * Model for OpportunityStage
 *
 * @property Metadata $_info
 * @property OpportunityProbabilityReference $probability
 * @property integer $id
 * @property integer $sequenceNumber
 * @property string $color
 * @property string $name
 */
class OpportunityStage extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'color' => 'string',
        'id' => 'integer',
        'name' => 'string',
        'probability' => OpportunityProbabilityReference::class,
        'sequenceNumber' => 'integer'
    ];
}
