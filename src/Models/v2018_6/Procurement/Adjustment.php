<?php

namespace Spinen\ConnectWise\Models\v2018_6\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Adjustment Version v2018_6
 *
 * Model for Adjustment
 *
 * @property AdjustmentTypeReference $type
 * @property Carbon\Carbon $closedDate
 * @property Metadata $_info
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
        'closedBy' => 'string',
        'closedDate' => Carbon\Carbon::class,
        'closedFlag' => 'boolean',
        'id' => 'integer',
        'identifier' => 'string',
        'notes' => 'string',
        'reason' => 'string',
        'type' => AdjustmentTypeReference::class,
    ];
}
