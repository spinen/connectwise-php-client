<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class KPICategoryReference Version v2018_5
 *
 * Model for KPICategoryReference
 *
 * @property Spinen\ConnectWise\Models\v2018_5\System\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class KPICategoryReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\System\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
