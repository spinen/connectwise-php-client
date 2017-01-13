<?php

namespace Spinen\ConnectWise\Models\Service;

use Spinen\ConnectWise\Support\Model;

class TicketTask extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'ticketId' => 'integer',
        'notes' => 'string',
        'closedFlag' => 'boolean',
        'priority' => 'integer',
        'resolution' => 'string',
        'childScheduleAction' => 'string',
        'childTicketId' => 'integer',
    ];
}
