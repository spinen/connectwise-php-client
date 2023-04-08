<?php

namespace Spinen\ConnectWise\Models\v2018_6\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TicketsPipeline Version v2018_6
 *
 * Model for TicketsPipeline
 *
 * @property BoardReference $board
 * @property Metadata $_info
 * @property ServiceStatusReference $status
 * @property TicketReference $ticket
 * @property int $id
 */
class TicketsPipeline extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'board' => BoardReference::class,
        'id' => 'integer',
        'status' => ServiceStatusReference::class,
        'ticket' => TicketReference::class,
    ];
}
