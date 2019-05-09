<?php

namespace Spinen\ConnectWise\Models\v2019_2\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OpportunityStatus Version v2019_2
 * 
 * Model for OpportunityStatus
 *
 * @property integer $id
 * @property string $name
 * @property boolean $wonFlag
 * @property boolean $lostFlag
 * @property boolean $closedFlag
 * @property boolean $inactiveFlag
 * @property boolean $defaultFlag
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\Metadata $_info
 * @property string $enteredBy
 * @property string $dateEntered
 */
class OpportunityStatus extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'wonFlag' => 'boolean',
        'lostFlag' => 'boolean',
        'closedFlag' => 'boolean',
        'inactiveFlag' => 'boolean',
        'defaultFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Sales\Metadata',
        'enteredBy' => 'string',
        'dateEntered' => 'string',
    ];
}
