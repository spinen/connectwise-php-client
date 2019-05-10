<?php

namespace Spinen\ConnectWise\Models\v2018_5\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Forecast Version v2018_5
 *
 * Model for Forecast
 *
 * @property Metadata $_info
 * @property OpportunityStatusReference $status
 * @property ProductRecurring $recurring
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
        '_info' => Metadata::class,
        'cost' => 'float',
        'id' => 'integer',
        'includedFlag' => 'boolean',
        'margin' => 'float',
        'name' => 'string',
        'opportunityId' => 'integer',
        'percent' => 'float',
        'recurring' => ProductRecurring::class,
        'revenue' => 'float',
        'status' => OpportunityStatusReference::class,
        'type' => 'string',
    ];
}
