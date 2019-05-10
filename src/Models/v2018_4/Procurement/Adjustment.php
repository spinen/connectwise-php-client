<?php

namespace Spinen\ConnectWise\Models\v2018_4\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Adjustment Version v2018_4
 *
 * Model for Adjustment
 *
 * @property integer $id
 * @property string $identifier
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\AdjustmentTypeReference $type
 * @property string $reason
 * @property string $notes
 * @property boolean $closedFlag
 * @property string $closedBy
 * @property Carbon\Carbon $closedDate
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\Metadata $_info
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
        'type' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\AdjustmentTypeReference',
        'reason' => 'string',
        'notes' => 'string',
        'closedFlag' => 'boolean',
        'closedBy' => 'string',
        'closedDate' => 'Carbon\Carbon',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\Metadata',
    ];
}
