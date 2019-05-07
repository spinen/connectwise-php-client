<?php

namespace Spinen\ConnectWise\Models\v2019_3\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class RmaStatus
 *
 * @property integer $id
 * @property string $name
 * @property boolean $defaultFlag
 * @property integer $sortOrder
 * @property boolean $closedFlag
 */
class RmaStatus extends Model
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
        'sortOrder' => 'integer',
        'closedFlag' => 'boolean',
    ];
}
