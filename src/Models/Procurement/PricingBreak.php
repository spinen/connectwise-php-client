<?php

namespace Spinen\ConnectWise\Models\Procurement;

use Spinen\ConnectWise\Support\Model;

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
        'priceMethod' => 'string',
    ];
}
