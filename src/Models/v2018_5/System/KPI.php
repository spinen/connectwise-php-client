<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class KPI Version v2018_5
 *
 * Model for KPI
 *
 * @property KPICategoryReference $category
 * @property bool $inactiveFlag
 * @property int $id
 * @property int $sortOrder
 * @property string $dateFilter
 * @property string $name
 */
class KPI extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'category' => KPICategoryReference::class,
        'dateFilter' => 'string',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'name' => 'string',
        'sortOrder' => 'integer',
    ];
}
