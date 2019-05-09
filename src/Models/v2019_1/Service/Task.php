<?php

namespace Spinen\ConnectWise\Models\v2019_1\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Task Version v2019_1
 * 
 * Model for Task
 *
 * @property integer $id
 * @property integer $ticketId
 * @property string $notes
 * @property boolean $closedFlag
 * @property integer $priority
 * @property Spinen\ConnectWise\Models\v2019_1\Service\ScheduleEntryReference $schedule
 * @property Spinen\ConnectWise\Models\v2019_1\Service\ServiceCodeReference $code
 * @property string $resolution
 * @property string $childScheduleAction
 * @property integer $childTicketId
 * @property Spinen\ConnectWise\Models\v2019_1\Service\Metadata $_info
 */
class Task extends Model
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
        'schedule' => 'Spinen\ConnectWise\Models\v2019_1\Service\ScheduleEntryReference',
        'code' => 'Spinen\ConnectWise\Models\v2019_1\Service\ServiceCodeReference',
        'resolution' => 'string',
        'childScheduleAction' => 'string',
        'childTicketId' => 'integer',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Service\Metadata',
    ];
}
