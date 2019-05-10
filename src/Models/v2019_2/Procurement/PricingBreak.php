<?php

namespace Spinen\ConnectWise\Models\v2019_2\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PricingBreak Version v2019_2
 *
 * Model for PricingBreak
 *
 * @property integer $id
 * @property integer $detailId
 * @property float $amount
 * @property float $quantityStart
 * @property float $quantityEnd
 * @property boolean $unlimited
 * @property string $priceMethod
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\Metadata $_info
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
        'amount' => 'float',
        'quantityStart' => 'float',
        'quantityEnd' => 'float',
        'unlimited' => 'boolean',
        'priceMethod' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\Metadata',
    ];
}
