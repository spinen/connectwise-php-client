<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class KPICategory Version v2019_3
 *
 * Model for KPICategory
 *
 * @property int $id
 * @property int $sortOrder
 * @property string $name
 */
class KPICategory extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'sortOrder' => 'integer',
    ];
}
