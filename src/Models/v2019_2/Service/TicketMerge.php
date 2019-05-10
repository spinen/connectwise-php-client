<?php

namespace Spinen\ConnectWise\Models\v2019_2\Service;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class TicketMerge Version v2019_2
 *
 * Model for TicketMerge
 *
 * @property ServiceStatusReference $status
 * @property array $mergeTicketIds
 */
class TicketMerge extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'mergeTicketIds' => 'array',
        'status' => ServiceStatusReference::class
    ];
}
