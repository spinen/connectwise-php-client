<?php

namespace Spinen\ConnectWise\Models\v2019_3\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProductDemand Version v2019_3
 *
 * Model for ProductDemand
 *
 * @property float $cost
 * @property int $productRecId
 * @property int $quantity
 */
class ProductDemand extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'cost' => 'float',
        'productRecId' => 'integer',
        'quantity' => 'integer',
    ];
}
