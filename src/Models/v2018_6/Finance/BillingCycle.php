<?php

namespace Spinen\ConnectWise\Models\v2018_6\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BillingCycle Version v2018_6
 *
 * Model for BillingCycle
 *
 * @property Metadata $_info
 * @property bool $defaultFlag
 * @property int $id
 * @property string $billingOptions
 * @property string $identifier
 * @property string $name
 */
class BillingCycle extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'billingOptions' => 'string',
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string',
    ];
}
