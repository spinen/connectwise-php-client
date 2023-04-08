<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BillingStatus Version v2018_5
 *
 * Model for BillingStatus
 *
 * @property Metadata $_info
 * @property bool $closedFlag
 * @property bool $defaultFlag
 * @property bool $inactiveFlag
 * @property bool $sentFlag
 * @property int $id
 * @property int $sortOrder
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
        '_info' => Metadata::class,
        'closedFlag' => 'boolean',
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'name' => 'string',
        'sentFlag' => 'boolean',
        'sortOrder' => 'integer',
    ];
}
