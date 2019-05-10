<?php

namespace Spinen\ConnectWise\Models\v2018_4\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Task Version v2018_4
 *
 * Model for Task
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Service\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_4\Service\ScheduleEntryReference $schedule
 * @property Spinen\ConnectWise\Models\v2018_4\Service\ServiceCodeReference $code
 * @property boolean $closedFlag
 * @property integer $childTicketId
 * @property integer $id
 * @property integer $priority
 * @property integer $ticketId
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Service\Metadata',
        'childScheduleAction' => 'string',
        'childTicketId' => 'integer',
        'closedFlag' => 'boolean',
        'code' => 'Spinen\ConnectWise\Models\v2018_4\Service\ServiceCodeReference',
        'id' => 'integer',
        'notes' => 'string',
        'priority' => 'integer',
        'resolution' => 'string',
        'schedule' => 'Spinen\ConnectWise\Models\v2018_4\Service\ScheduleEntryReference',
        'ticketId' => 'integer',
    ];
}
