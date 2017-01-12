<?php

namespace Spinen\ConnectWise\Models\Procurement;

use Spinen\ConnectWise\Support\Model;

class AdjustmentDetail extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'description' => 'string',
        'quantityOnHand' => 'double',
        'unitCost' => 'double',
        'quantityAdjusted' => 'integer',
        'serialNumber' => 'string',
    ];
}
