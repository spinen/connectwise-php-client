<?php

namespace Spinen\ConnectWise\Models\v2019_1\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OrderStatusReference Version v2019_1
 *
 * Model for OrderStatusReference
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Sales\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
