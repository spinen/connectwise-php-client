<?php

namespace Spinen\ConnectWise\Models\v2019_2\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TicketTask
 *
 * @property integer $id
 * @property integer $ticketId
 * @property string $notes
 * @property boolean $closedFlag
 * @property integer $priority
 * @property string $resolution
 * @property string $childScheduleAction
 * @property integer $childTicketId
 */
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
