<?php

namespace Spinen\ConnectWise\Models\v2018_6\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TicketMerge Version v2018_6
 * 
 * Model for TicketMerge
 *
 * @property array $mergeTicketIds
 * @property Spinen\ConnectWise\Models\v2018_6\Service\ServiceStatusReference $status
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
        'status' => 'Spinen\ConnectWise\Models\v2018_6\Service\ServiceStatusReference',
    ];
}
