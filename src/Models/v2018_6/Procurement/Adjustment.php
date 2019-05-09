<?php

namespace Spinen\ConnectWise\Models\v2018_6\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Adjustment Version v2018_6
 * 
 * Model for Adjustment
 *
 * @property integer $id
 * @property string $identifier
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\AdjustmentTypeReference $type
 * @property string $reason
 * @property string $notes
 * @property boolean $closedFlag
 * @property string $closedBy
 * @property string $closedDate
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\Metadata $_info
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
        'type' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\AdjustmentTypeReference',
        'reason' => 'string',
        'notes' => 'string',
        'closedFlag' => 'boolean',
        'closedBy' => 'string',
        'closedDate' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\Metadata',
    ];
}
