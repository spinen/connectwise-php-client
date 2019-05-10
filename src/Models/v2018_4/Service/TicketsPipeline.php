<?php

namespace Spinen\ConnectWise\Models\v2018_4\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TicketsPipeline Version v2018_4
 *
 * Model for TicketsPipeline
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Service\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2018_4\Service\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_4\Service\ServiceStatusReference $status
 * @property Spinen\ConnectWise\Models\v2018_4\Service\TicketReference $ticket
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Service\Metadata',
        'board' => 'Spinen\ConnectWise\Models\v2018_4\Service\BoardReference',
        'id' => 'integer',
        'status' => 'Spinen\ConnectWise\Models\v2018_4\Service\ServiceStatusReference',
        'ticket' => 'Spinen\ConnectWise\Models\v2018_4\Service\TicketReference',
    ];
}
