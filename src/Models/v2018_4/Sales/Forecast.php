<?php

namespace Spinen\ConnectWise\Models\v2018_4\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Forecast Version v2018_4
 *
 * Model for Forecast
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\OpportunityStatusReference $status
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\ProductRecurring $recurring
 * @property boolean $includedFlag
 * @property float $cost
 * @property float $margin
 * @property float $percent
 * @property float $revenue
 * @property integer $id
 * @property integer $opportunityId
 * @property string $QuoteName
 * @property string $QuoteNumber
 * @property string $name
 * @property string $type
 */
class Forecast extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'QuoteName' => 'string',
        'QuoteNumber' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Sales\Metadata',
        'cost' => 'float',
        'id' => 'integer',
        'includedFlag' => 'boolean',
        'margin' => 'float',
        'name' => 'string',
        'opportunityId' => 'integer',
        'percent' => 'float',
        'recurring' => 'Spinen\ConnectWise\Models\v2018_4\Sales\ProductRecurring',
        'revenue' => 'float',
        'status' => 'Spinen\ConnectWise\Models\v2018_4\Sales\OpportunityStatusReference',
        'type' => 'string',
    ];
}
