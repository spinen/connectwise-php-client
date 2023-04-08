<?php

namespace Spinen\ConnectWise\Models\v2018_4\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PricingBreak Version v2018_4
 *
 * Model for PricingBreak
 *
 * @property Metadata $_info
 * @property bool $unlimited
 * @property float $amount
 * @property float $quantityEnd
 * @property float $quantityStart
 * @property int $detailId
 * @property int $id
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
        '_info' => Metadata::class,
        'amount' => 'float',
        'detailId' => 'integer',
        'id' => 'integer',
        'priceMethod' => 'string',
        'quantityEnd' => 'float',
        'quantityStart' => 'float',
        'unlimited' => 'boolean',
    ];
}
