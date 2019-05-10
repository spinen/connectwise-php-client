<?php

namespace Spinen\ConnectWise\Models\v2019_3\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TicketTask Version v2019_3
 *
 * Model for TicketTask
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Project\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_3\Project\ScheduleEntryReference $schedule
 * @property Spinen\ConnectWise\Models\v2019_3\Project\ServiceCodeReference $code
 * @property boolean $closedFlag
 * @property integer $childTicketId
 * @property integer $id
 * @property integer $priority
 * @property integer $ticketId
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Project\Metadata',
        'childScheduleAction' => 'string',
        'childTicketId' => 'integer',
        'closedFlag' => 'boolean',
        'code' => 'Spinen\ConnectWise\Models\v2019_3\Project\ServiceCodeReference',
        'id' => 'integer',
        'notes' => 'string',
        'priority' => 'integer',
        'resolution' => 'string',
        'schedule' => 'Spinen\ConnectWise\Models\v2019_3\Project\ScheduleEntryReference',
        'ticketId' => 'integer',
    ];
}
