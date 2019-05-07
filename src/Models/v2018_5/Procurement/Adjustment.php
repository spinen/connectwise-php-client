<?php

namespace Spinen\ConnectWise\Models\v2018_5\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Adjustment
 *
 * @property integer $id
 * @property string $identifier
 * @property string $reason
 * @property string $notes
 * @property boolean $closedFlag
 * @property string $closedBy
 * @property carbon $closedDate
 */
class Adjustment extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'identifier' => 'string',
        'reason' => 'string',
        'notes' => 'string',
        'closedFlag' => 'boolean',
        'closedBy' => 'string',
        'closedDate' => 'carbon',
    ];
}
