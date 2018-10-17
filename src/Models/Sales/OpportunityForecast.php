<?php

namespace Spinen\ConnectWise\Models\Sales;

use Spinen\ConnectWise\Support\Model;

class OpportunityForecast extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'revenue' => 'double',
        'cost' => 'double',
        'type' => 'string',
        'includedFlag' => 'boolean',
        'percent' => 'double',
        'margin' => 'double',
        'opportunityId' => 'integer',
        'QuoteNumber' => 'string',
        'QuoteName' => 'string',
    ];
}
