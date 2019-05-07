<?php

namespace Spinen\ConnectWise\Models\v2019_1\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Ticket
 *
 * @property integer $id
 * @property string $deviceIdentifier
 */
class Ticket extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'deviceIdentifier' => 'string',
    ];
}
