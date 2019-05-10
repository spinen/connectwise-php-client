<?php

namespace Spinen\ConnectWise\Models\v2018_5\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SalesProbability Version v2018_5
 *
 * Model for SalesProbability
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\Metadata $_info
 * @property integer $id
 * @property integer $probability
 */
class SalesProbability extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Sales\Metadata',
        'id' => 'integer',
        'probability' => 'integer',
    ];
}
