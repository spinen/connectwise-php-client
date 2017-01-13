<?php

namespace Spinen\ConnectWise\Models\Procurement;

use Spinen\ConnectWise\Support\Model;

class Adjustment extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'identifier' => 'string',
        'reason' => 'string',
        'notes' => 'string',
        'closedFlag' => 'boolean',
        'closedBy' => 'string',
        'closedDate' => 'carbon',
    ];
}
