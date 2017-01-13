<?php

namespace Spinen\ConnectWise\Models\Sales;

use Spinen\ConnectWise\Support\Model;

class Activity extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'phoneNumber' => 'string',
        'email' => 'string',
        'notes' => 'string',
        'dateStart' => 'carbon',
        'dateEnd' => 'carbon',
        'notifyFlag' => 'boolean',
        'customFields' => 'array',
    ];
}
