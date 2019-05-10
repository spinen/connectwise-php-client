<?php

namespace Spinen\ConnectWise\Models\v2019_2\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TicketPipeline Version v2019_2
 *
 * Model for TicketPipeline
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\TicketReference $ticket
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\ServiceStatusReference $status
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\Metadata $_info
 */
class TicketPipeline extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'ticket' => 'Spinen\ConnectWise\Models\v2019_2\Internal\TicketReference',
        'board' => 'Spinen\ConnectWise\Models\v2019_2\Internal\BoardReference',
        'status' => 'Spinen\ConnectWise\Models\v2019_2\Internal\ServiceStatusReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Internal\Metadata',
    ];
}
