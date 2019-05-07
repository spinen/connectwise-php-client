<?php

namespace Spinen\ConnectWise\Models\v2018_5\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OpportunityForecast
 *
 * @property integer $id
 * @property string $name
 * @property double $revenue
 * @property double $cost
 * @property string $type
 * @property boolean $includedFlag
 * @property double $percent
 * @property double $margin
 * @property integer $opportunityId
 * @property string $QuoteNumber
 * @property string $QuoteName
 */
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
