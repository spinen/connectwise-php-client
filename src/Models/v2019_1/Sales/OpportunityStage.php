<?php

namespace Spinen\ConnectWise\Models\v2019_1\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OpportunityStage Version v2019_1
 *
 * Model for OpportunityStage
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\OpportunityProbabilityReference $probability
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Sales\Metadata',
        'color' => 'string',
        'id' => 'integer',
        'name' => 'string',
        'probability' => 'Spinen\ConnectWise\Models\v2019_1\Sales\OpportunityProbabilityReference',
        'sequenceNumber' => 'integer',
    ];
}
