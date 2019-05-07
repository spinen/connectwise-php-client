<?php

namespace Spinen\ConnectWise\Models\v2018_6\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProductType
 *
 * @property integer $id
 * @property string $name
 * @property boolean $inactiveFlag
 * @property string $typeXref
 */
class ProductType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'inactiveFlag' => 'boolean',
        'typeXref' => 'string',
    ];
}
