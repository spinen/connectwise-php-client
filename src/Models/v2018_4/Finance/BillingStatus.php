<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BillingStatus Version v2018_4
 *
 * Model for BillingStatus
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\Metadata $_info
 * @property boolean $closedFlag
 * @property boolean $defaultFlag
 * @property boolean $inactiveFlag
 * @property boolean $sentFlag
 * @property integer $id
 * @property integer $sortOrder
 * @property string $name
 */
class BillingStatus extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Finance\Metadata',
        'closedFlag' => 'boolean',
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'name' => 'string',
        'sentFlag' => 'boolean',
        'sortOrder' => 'integer',
    ];
}
