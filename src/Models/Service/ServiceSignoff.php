<?php

namespace Spinen\ConnectWise\Models\Service;

use Spinen\ConnectWise\Support\Model;

class ServiceSignoff extends Model
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
