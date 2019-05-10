<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SecurityRole Version v2018_5
 *
 * Model for SecurityRole
 *
 * @property integer $id
 * @property string $name
 * @property boolean $adminFlag
 * @property boolean $inactiveFlag
 * @property Spinen\ConnectWise\Models\v2018_5\System\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\System\Metadata',
    ];
}
