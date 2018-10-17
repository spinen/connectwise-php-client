<?php

namespace Spinen\ConnectWise\Models\Sales;

use Spinen\ConnectWise\Support\Model;

class OrderStatus extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'type' => 'string',
        'count' => 'integer',
        'id' => 'integer',
        'description' => 'string',
        'hyperlink' => 'string',
    ];
}
