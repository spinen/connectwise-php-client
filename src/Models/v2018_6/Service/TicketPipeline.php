<?php

namespace Spinen\ConnectWise\Models\v2018_6\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TicketPipeline Version v2018_6
 *
 * Model for TicketPipeline
 *
 * @property BoardReference $board
 * @property Metadata $_info
 * @property ServiceStatusReference $status
 * @property TicketReference $ticket
 * @property int $id
 */
class TicketPipeline extends Model
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
