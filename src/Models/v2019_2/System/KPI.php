<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class KPI
 *
 * @property integer $id
 * @property string $name
 * @property string $dateFilter
 * @property integer $sortOrder
 * @property boolean $inactiveFlag
 */
class KPI extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'dateFilter' => 'string',
        'sortOrder' => 'integer',
        'inactiveFlag' => 'boolean',
    ];
}
