<?php

namespace Spinen\ConnectWise\Models\v2019_3\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TicketReference Version v2019_3
 *
 * Model for TicketReference
 *
 * @property integer $id
 * @property string $summary
 * @property Spinen\ConnectWise\Models\v2019_3\Procurement\Metadata $_info
 */
class TicketReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'summary' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Procurement\Metadata',
    ];
}
