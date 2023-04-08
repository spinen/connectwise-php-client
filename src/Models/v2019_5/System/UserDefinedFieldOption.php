<?php

namespace Spinen\ConnectWise\Models\v2019_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class UserDefinedFieldOption Version v2019_5
 *
 * Model for UserDefinedFieldOption
 *
 * @property bool $defaultFlag
 * @property bool $inactiveFlag
 * @property int $id
 * @property int $sortOrder
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
