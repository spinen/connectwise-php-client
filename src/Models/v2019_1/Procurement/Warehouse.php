<?php

namespace Spinen\ConnectWise\Models\v2019_1\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Warehouse
 *
 * @property integer $id
 * @property string $name
 * @property string $locationXref
 * @property boolean $locationDefaultFlag
 * @property boolean $overallDefaultFlag
 * @property boolean $inactiveFlag
 */
class Warehouse extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'locationXref' => 'string',
        'locationDefaultFlag' => 'boolean',
        'overallDefaultFlag' => 'boolean',
        'inactiveFlag' => 'boolean',
    ];
}
