<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ActivityStatusReference Version v2018_5
 *
 * Required when notifyType is set to: "Create Activity"
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $name
 */
class ActivityStatusReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'name' => 'string'
    ];
}
