<?php

namespace Spinen\ConnectWise\Models\v2019_5\Procurement;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class Adjustment Version v2019_5
 *
 * Model for Adjustment
 *
 * @property AdjustmentTypeReference $type
 * @property Carbon $closedDate
 * @property Metadata $_info
 * @property array $adjustmentDetails
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
        '_info' => Metadata::class,
        'adjustmentDetails' => 'array',
        'closedBy' => 'string',
        'closedDate' => Carbon::class,
        'closedFlag' => 'boolean',
        'id' => 'integer',
        'identifier' => 'string',
        'notes' => 'string',
        'reason' => 'string',
        'type' => AdjustmentTypeReference::class
    ];
}
