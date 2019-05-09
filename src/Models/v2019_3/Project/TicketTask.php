<?php

namespace Spinen\ConnectWise\Models\v2019_3\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TicketTask Version v2019_3
 * 
 * Model for TicketTask
 *
 * @property integer $id
 * @property integer $ticketId
 * @property string $notes
 * @property boolean $closedFlag
 * @property integer $priority
 * @property Spinen\ConnectWise\Models\v2019_3\Project\ScheduleEntryReference $schedule
 * @property Spinen\ConnectWise\Models\v2019_3\Project\ServiceCodeReference $code
 * @property string $resolution
 * @property string $childScheduleAction
 * @property integer $childTicketId
 * @property Spinen\ConnectWise\Models\v2019_3\Project\Metadata $_info
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
        'schedule' => 'Spinen\ConnectWise\Models\v2019_3\Project\ScheduleEntryReference',
        'code' => 'Spinen\ConnectWise\Models\v2019_3\Project\ServiceCodeReference',
        'resolution' => 'string',
        'childScheduleAction' => 'string',
        'childTicketId' => 'integer',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Project\Metadata',
    ];
}
