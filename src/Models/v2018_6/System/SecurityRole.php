<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SecurityRole
 *
 * @property integer $id
 * @property string $name
 * @property boolean $adminFlag
 * @property boolean $inactiveFlag
 */
class SecurityRole extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'adminFlag' => 'boolean',
        'inactiveFlag' => 'boolean',
    ];
}
