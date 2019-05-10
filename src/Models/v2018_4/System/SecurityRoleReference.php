<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SecurityRoleReference Version v2018_4
 *
 * Model for SecurityRoleReference
 *
 * @property Spinen\ConnectWise\Models\v2018_4\System\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class SecurityRoleReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\System\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
