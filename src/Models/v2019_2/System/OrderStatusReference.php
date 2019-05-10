<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class OrderStatusReference Version v2019_2
 *
 * Required when notifyType is set to: "Change Sales Order Status"
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $name
 */
class OrderStatusReference extends Model
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
