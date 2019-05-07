<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BillingCycle
 *
 * @property integer $id
 * @property string $identifier
 * @property string $name
 * @property boolean $defaultFlag
 * @property string $billingOptions
 */
class BillingCycle extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string',
        'defaultFlag' => 'boolean',
        'billingOptions' => 'string',
    ];
}
