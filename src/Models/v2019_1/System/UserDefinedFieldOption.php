<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class UserDefinedFieldOption Version v2019_1
 *
 * Model for UserDefinedFieldOption
 *
 * @property boolean $defaultFlag
 * @property boolean $inactiveFlag
 * @property integer $id
 * @property integer $sortOrder
 * @property string $optionValue
 */
class UserDefinedFieldOption extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'optionValue' => 'string',
        'sortOrder' => 'integer',
    ];
}
