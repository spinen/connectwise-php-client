<?php

namespace Spinen\ConnectWise\Models\v2019_2\Internal;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class TicketReference Version v2019_2
 *
 * Model for TicketReference
 *
 * @property Metadata $_info
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
        '_info' => Metadata::class,
        'id' => 'integer',
        'summary' => 'string'
    ];
}
