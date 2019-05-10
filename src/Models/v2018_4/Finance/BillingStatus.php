<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BillingStatus Version v2018_4
 *
 * Model for BillingStatus
 *
 * @property integer $id
 * @property string $name
 * @property integer $sortOrder
 * @property boolean $defaultFlag
 * @property boolean $closedFlag
 * @property boolean $inactiveFlag
 * @property boolean $sentFlag
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\Metadata $_info
 */
class BillingStatus extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'sortOrder' => 'integer',
        'defaultFlag' => 'boolean',
        'closedFlag' => 'boolean',
        'inactiveFlag' => 'boolean',
        'sentFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Finance\Metadata',
    ];
}
