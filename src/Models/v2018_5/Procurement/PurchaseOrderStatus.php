<?php

namespace Spinen\ConnectWise\Models\v2018_5\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PurchaseOrderStatus
 *
 * @property integer $id
 * @property string $name
 * @property boolean $defaultFlag
 * @property boolean $closedFlag
 * @property boolean $inactiveFlag
 * @property boolean $defaultClosedFlag
 * @property integer $sortOrder
 */
class PurchaseOrderStatus extends Model
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
        'closedFlag' => 'boolean',
        'inactiveFlag' => 'boolean',
        'defaultClosedFlag' => 'boolean',
        'sortOrder' => 'integer',
    ];
}
