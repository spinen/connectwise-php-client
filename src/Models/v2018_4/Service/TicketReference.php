<?php

namespace Spinen\ConnectWise\Models\v2018_4\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TicketReference Version v2018_4
 *
 * Model for TicketReference
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Service\Metadata $_info
 * @property integer $id
 * @property string $summary
 */
class TicketReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Service\Metadata',
        'id' => 'integer',
        'summary' => 'string',
    ];
}
