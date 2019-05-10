<?php

namespace Spinen\ConnectWise\Models\v2019_2\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TicketPipeline Version v2019_2
 *
 * Model for TicketPipeline
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\ServiceStatusReference $status
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\TicketReference $ticket
 * @property integer $id
 */
class TicketPipeline extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Internal\Metadata',
        'board' => 'Spinen\ConnectWise\Models\v2019_2\Internal\BoardReference',
        'id' => 'integer',
        'status' => 'Spinen\ConnectWise\Models\v2019_2\Internal\ServiceStatusReference',
        'ticket' => 'Spinen\ConnectWise\Models\v2019_2\Internal\TicketReference',
    ];
}
