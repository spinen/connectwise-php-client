<?php

namespace Spinen\ConnectWise\Models\v2018_6\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OpportunityStage Version v2018_6
 * 
 * Model for OpportunityStage
 *
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\OpportunityProbabilityReference $probability
 * @property string $color
 * @property integer $sequenceNumber
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\Metadata $_info
 */
class OpportunityStage extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'probability' => 'Spinen\ConnectWise\Models\v2018_6\Sales\OpportunityProbabilityReference',
        'color' => 'string',
        'sequenceNumber' => 'integer',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Sales\Metadata',
    ];
}
