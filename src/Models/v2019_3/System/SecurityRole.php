<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SecurityRole Version v2019_3
 * 
 * Model for SecurityRole
 *
 * @property integer $id
 * @property string $name
 * @property boolean $adminFlag
 * @property boolean $inactiveFlag
 * @property Spinen\ConnectWise\Models\v2019_3\System\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\System\Metadata',
    ];
}
