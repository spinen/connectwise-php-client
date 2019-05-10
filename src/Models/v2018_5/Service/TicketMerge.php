<?php

namespace Spinen\ConnectWise\Models\v2018_5\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TicketMerge Version v2018_5
 *
 * Model for TicketMerge
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Service\ServiceStatusReference $status
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
        'status' => 'Spinen\ConnectWise\Models\v2018_5\Service\ServiceStatusReference',
    ];
}
