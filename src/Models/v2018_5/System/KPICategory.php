<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class KPICategory Version v2018_5
 *
 * Model for KPICategory
 *
 * @property integer $id
 * @property integer $sortOrder
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
