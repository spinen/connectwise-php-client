<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GroupReference Version v2019_1
 *
 * Required when notifyType is set to: "Add to Group"
 *
 * @property Spinen\ConnectWise\Models\v2019_1\System\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class GroupReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\System\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
