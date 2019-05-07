<?php

namespace Spinen\ConnectWise\Models\v2019_2\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OrderStatus
 *
 * @property integer $id
 * @property string $name
 * @property boolean $defaultFlag
 * @property boolean $inactiveFlag
 * @property integer $sortOrder
 * @property boolean $closedFlag
 */
class OrderStatus extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'defaultFlag' => 'boolean',
        'inactiveFlag' => 'boolean',
        'sortOrder' => 'integer',
        'closedFlag' => 'boolean',
    ];
}
