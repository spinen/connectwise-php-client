<?php

namespace Spinen\ConnectWise\Models\v2018_6\Sales;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class OpportunityStatus Version v2018_6
 *
 * Model for OpportunityStatus
 *
 * @property Carbon $dateEntered
 * @property Metadata $_info
 * @property boolean $closedFlag
 * @property boolean $defaultFlag
 * @property boolean $inactiveFlag
 * @property boolean $lostFlag
 * @property boolean $wonFlag
 * @property integer $id
 * @property string $enteredBy
 * @property string $name
 */
class OpportunityStatus extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'closedFlag' => 'boolean',
        'dateEntered' => Carbon::class,
        'defaultFlag' => 'boolean',
        'enteredBy' => 'string',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'lostFlag' => 'boolean',
        'name' => 'string',
        'wonFlag' => 'boolean'
    ];
}
