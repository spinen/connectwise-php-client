<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class UserDefinedFieldOption Version v2019_3
 *
 * Model for UserDefinedFieldOption
 *
 * @property integer $id
 * @property string $optionValue
 * @property boolean $defaultFlag
 * @property boolean $inactiveFlag
 * @property integer $sortOrder
 */
class UserDefinedFieldOption extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'optionValue' => 'string',
        'defaultFlag' => 'boolean',
        'inactiveFlag' => 'boolean',
        'sortOrder' => 'integer',
    ];
}
