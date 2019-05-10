<?php

namespace Spinen\ConnectWise\Models\v2019_1\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OpportunityStatus Version v2019_1
 *
 * Model for OpportunityStatus
 *
 * @property Carbon\Carbon $dateEntered
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Sales\Metadata',
        'closedFlag' => 'boolean',
        'dateEntered' => 'Carbon\Carbon',
        'defaultFlag' => 'boolean',
        'enteredBy' => 'string',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'lostFlag' => 'boolean',
        'name' => 'string',
        'wonFlag' => 'boolean',
    ];
}
