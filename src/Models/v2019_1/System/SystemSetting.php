<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SystemSetting
 *
 * @property integer $id
 * @property string $description
 * @property string $value
 * @property string $valueType
 */
class SystemSetting extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'description' => 'string',
        'value' => 'string',
        'valueType' => 'string',
    ];
}
