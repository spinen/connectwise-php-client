<?php

namespace Spinen\ConnectWise\Models\v2019_1\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Forecast Version v2019_1
 * 
 * Model for Forecast
 *
 * @property integer $id
 * @property string $name
 * @property number $revenue
 * @property number $cost
 * @property string $type
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\OpportunityStatusReference $status
 * @property boolean $includedFlag
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\ProductRecurring $recurring
 * @property number $percent
 * @property number $margin
 * @property integer $opportunityId
 * @property string $QuoteNumber
 * @property string $QuoteName
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\Metadata $_info
 */
class Forecast extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'revenue' => 'number',
        'cost' => 'number',
        'type' => 'string',
        'status' => 'Spinen\ConnectWise\Models\v2019_1\Sales\OpportunityStatusReference',
        'includedFlag' => 'boolean',
        'recurring' => 'Spinen\ConnectWise\Models\v2019_1\Sales\ProductRecurring',
        'percent' => 'number',
        'margin' => 'number',
        'opportunityId' => 'integer',
        'QuoteNumber' => 'string',
        'QuoteName' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Sales\Metadata',
    ];
}
