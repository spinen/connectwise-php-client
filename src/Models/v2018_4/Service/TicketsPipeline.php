<?php

namespace Spinen\ConnectWise\Models\v2018_4\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TicketsPipeline Version v2018_4
 *
 * Model for TicketsPipeline
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_4\Service\TicketReference $ticket
 * @property Spinen\ConnectWise\Models\v2018_4\Service\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2018_4\Service\ServiceStatusReference $status
 * @property Spinen\ConnectWise\Models\v2018_4\Service\Metadata $_info
 */
class TicketsPipeline extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'ticket' => 'Spinen\ConnectWise\Models\v2018_4\Service\TicketReference',
        'board' => 'Spinen\ConnectWise\Models\v2018_4\Service\BoardReference',
        'status' => 'Spinen\ConnectWise\Models\v2018_4\Service\ServiceStatusReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Service\Metadata',
    ];
}
