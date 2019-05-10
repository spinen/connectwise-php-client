<?php

namespace Spinen\ConnectWise\Models\v2018_6\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Forecast Version v2018_6
 *
 * Model for Forecast
 *
 * @property integer $id
 * @property string $name
 * @property float $revenue
 * @property float $cost
 * @property string $type
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\OpportunityStatusReference $status
 * @property boolean $includedFlag
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\ProductRecurring $recurring
 * @property float $percent
 * @property float $margin
 * @property integer $opportunityId
 * @property string $QuoteNumber
 * @property string $QuoteName
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\Metadata $_info
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
        'revenue' => 'float',
        'cost' => 'float',
        'type' => 'string',
        'status' => 'Spinen\ConnectWise\Models\v2018_6\Sales\OpportunityStatusReference',
        'includedFlag' => 'boolean',
        'recurring' => 'Spinen\ConnectWise\Models\v2018_6\Sales\ProductRecurring',
        'percent' => 'float',
        'margin' => 'float',
        'opportunityId' => 'integer',
        'QuoteNumber' => 'string',
        'QuoteName' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Sales\Metadata',
    ];
}
