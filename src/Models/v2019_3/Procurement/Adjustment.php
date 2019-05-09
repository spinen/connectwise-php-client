<?php

namespace Spinen\ConnectWise\Models\v2019_3\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Adjustment Version v2019_3
 * 
 * Model for Adjustment
 *
 * @property integer $id
 * @property string $identifier
 * @property Spinen\ConnectWise\Models\v2019_3\Procurement\AdjustmentTypeReference $type
 * @property string $reason
 * @property string $notes
 * @property boolean $closedFlag
 * @property string $closedBy
 * @property string $closedDate
 * @property array $adjustmentDetails
 * @property Spinen\ConnectWise\Models\v2019_3\Procurement\Metadata $_info
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
        'type' => 'Spinen\ConnectWise\Models\v2019_3\Procurement\AdjustmentTypeReference',
        'reason' => 'string',
        'notes' => 'string',
        'closedFlag' => 'boolean',
        'closedBy' => 'string',
        'closedDate' => 'string',
        'adjustmentDetails' => 'array',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Procurement\Metadata',
    ];
}
