<?php

namespace Spinen\ConnectWise\Models\v2019_3\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TicketsPipeline
 *
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
        'id' => 'integer',
    ];
}
