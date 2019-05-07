<?php

namespace Spinen\ConnectWise\Models\v2018_6\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OpportunityStage
 *
 * @property integer $id
 * @property string $name
 * @property string $color
 * @property integer $sequenceNumber
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
        'color' => 'string',
        'sequenceNumber' => 'integer',
    ];
}
