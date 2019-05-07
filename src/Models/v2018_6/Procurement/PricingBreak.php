<?php

namespace Spinen\ConnectWise\Models\v2018_6\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PricingBreak
 *
 * @property integer $id
 * @property integer $detailId
 * @property double $amount
 * @property double $quantityStart
 * @property double $quantityEnd
 * @property boolean $unlimited
 * @property string $priceMethod
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
        'amount' => 'double',
        'quantityStart' => 'double',
        'quantityEnd' => 'double',
        'unlimited' => 'boolean',
        'priceMethod' => 'string',
    ];
}
