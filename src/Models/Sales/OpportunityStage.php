<?php

namespace Spinen\ConnectWise\Models\Sales;

use Spinen\ConnectWise\Support\Model;

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
