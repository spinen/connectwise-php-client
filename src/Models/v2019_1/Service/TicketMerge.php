<?php

namespace Spinen\ConnectWise\Models\v2019_1\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TicketMerge Version v2019_1
 * 
 * Model for TicketMerge
 *
 * @property array $mergeTicketIds
 * @property Spinen\ConnectWise\Models\v2019_1\Service\ServiceStatusReference $status
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
        'status' => 'Spinen\ConnectWise\Models\v2019_1\Service\ServiceStatusReference',
    ];
}
