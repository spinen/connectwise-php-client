<?php

namespace Spinen\ConnectWise\Models\v2018_4\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AdjustmentDetail
 *
 * @property integer $id
 * @property string $description
 * @property double $quantityOnHand
 * @property double $unitCost
 * @property integer $quantityAdjusted
 * @property string $serialNumber
 */
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
