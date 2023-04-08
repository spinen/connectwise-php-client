<?php

namespace Spinen\ConnectWise\Models\v2019_2\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TicketTask Version v2019_2
 *
 * Model for TicketTask
 *
 * @property Metadata $_info
 * @property ScheduleEntryReference $schedule
 * @property ServiceCodeReference $code
 * @property bool $closedFlag
 * @property int $childTicketId
 * @property int $id
 * @property int $priority
 * @property int $ticketId
 * @property string $childScheduleAction
 * @property string $notes
 * @property string $resolution
 */
class TicketTask extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'childScheduleAction' => 'string',
        'childTicketId' => 'integer',
        'closedFlag' => 'boolean',
        'code' => ServiceCodeReference::class,
        'id' => 'integer',
        'notes' => 'string',
        'priority' => 'integer',
        'resolution' => 'string',
        'schedule' => ScheduleEntryReference::class,
        'ticketId' => 'integer',
    ];
}
