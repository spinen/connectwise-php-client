<?php

namespace Spinen\ConnectWise\Models\v2019_1\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TicketsPipeline Version v2019_1
 *
 * Model for TicketsPipeline
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\ServiceStatusReference $status
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\TicketReference $ticket
 * @property integer $id
 */
class TicketsPipeline extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Internal\Metadata',
        'board' => 'Spinen\ConnectWise\Models\v2019_1\Internal\BoardReference',
        'id' => 'integer',
        'status' => 'Spinen\ConnectWise\Models\v2019_1\Internal\ServiceStatusReference',
        'ticket' => 'Spinen\ConnectWise\Models\v2019_1\Internal\TicketReference',
    ];
}
