<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class KPI Version v2019_3
 *
 * Model for KPI
 *
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2019_3\System\KPICategoryReference $category
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
        'category' => 'Spinen\ConnectWise\Models\v2019_3\System\KPICategoryReference',
        'dateFilter' => 'string',
        'sortOrder' => 'integer',
        'inactiveFlag' => 'boolean',
    ];
}
