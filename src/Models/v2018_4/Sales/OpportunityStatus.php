<?php

namespace Spinen\ConnectWise\Models\v2018_4\Sales;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class OpportunityStatus Version v2018_4
 *
 * Model for OpportunityStatus
 *
 * @property Carbon $dateEntered
 * @property Metadata $_info
 * @property bool $closedFlag
 * @property bool $defaultFlag
 * @property bool $inactiveFlag
 * @property bool $lostFlag
 * @property bool $wonFlag
 * @property int $id
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
        'wonFlag' => 'boolean',
    ];
}
