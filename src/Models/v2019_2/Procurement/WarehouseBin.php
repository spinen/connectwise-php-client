<?php

namespace Spinen\ConnectWise\Models\v2019_2\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WarehouseBin
 *
 * @property integer $id
 * @property string $name
 * @property double $minQuantity
 * @property double $maxQuantity
 * @property double $length
 * @property double $width
 * @property double $height
 * @property double $weight
 * @property boolean $defaultFlag
 * @property boolean $inactiveFlag
 * @property integer $quantityOnHand
 */
class WarehouseBin extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'minQuantity' => 'double',
        'maxQuantity' => 'double',
        'length' => 'double',
        'width' => 'double',
        'height' => 'double',
        'weight' => 'double',
        'defaultFlag' => 'boolean',
        'inactiveFlag' => 'boolean',
        'quantityOnHand' => 'integer',
    ];
}
