<?php

namespace Spinen\ConnectWise\Models\v2019_1\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SalesProbability Version v2019_1
 * 
 * Model for SalesProbability
 *
 * @property integer $id
 * @property integer $probability
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\Metadata $_info
 */
class SalesProbability extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'probability' => 'integer',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Sales\Metadata',
    ];
}
