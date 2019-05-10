<?php

namespace Spinen\ConnectWise\Models\v2018_5\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Adjustment Version v2018_5
 *
 * Model for Adjustment
 *
 * @property Carbon\Carbon $closedDate
 * @property Spinen\ConnectWise\Models\v2018_5\Procurement\AdjustmentTypeReference $type
 * @property Spinen\ConnectWise\Models\v2018_5\Procurement\Metadata $_info
 * @property boolean $closedFlag
 * @property integer $id
 * @property string $closedBy
 * @property string $identifier
 * @property string $notes
 * @property string $reason
 */
class Adjustment extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Procurement\Metadata',
        'closedBy' => 'string',
        'closedDate' => 'Carbon\Carbon',
        'closedFlag' => 'boolean',
        'id' => 'integer',
        'identifier' => 'string',
        'notes' => 'string',
        'reason' => 'string',
        'type' => 'Spinen\ConnectWise\Models\v2018_5\Procurement\AdjustmentTypeReference',
    ];
}
