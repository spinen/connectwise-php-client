<?php

namespace Spinen\ConnectWise\Models\v2019_1\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class UnitOfMeasureConversion
 *
 * @property integer $id
 * @property double $quantity
 */
class UnitOfMeasureConversion extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'quantity' => 'double',
    ];
}
