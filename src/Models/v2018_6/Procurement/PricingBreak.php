<?php

namespace Spinen\ConnectWise\Models\v2018_6\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PricingBreak Version v2018_6
 * 
 * Model for PricingBreak
 *
 * @property integer $id
 * @property integer $detailId
 * @property number $amount
 * @property number $quantityStart
 * @property number $quantityEnd
 * @property boolean $unlimited
 * @property string $priceMethod
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\Metadata $_info
 */
class PricingBreak extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'detailId' => 'integer',
        'amount' => 'number',
        'quantityStart' => 'number',
        'quantityEnd' => 'number',
        'unlimited' => 'boolean',
        'priceMethod' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\Metadata',
    ];
}
