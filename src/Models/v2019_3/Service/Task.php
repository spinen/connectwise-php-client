<?php

namespace Spinen\ConnectWise\Models\v2019_3\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Task Version v2019_3
 *
 * Model for Task
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
class Task extends Model
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
