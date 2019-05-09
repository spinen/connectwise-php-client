<?php

namespace Spinen\ConnectWise\Models\v2019_3\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BillingCycle Version v2019_3
 * 
 * Model for BillingCycle
 *
 * @property integer $id
 * @property string $identifier
 * @property string $name
 * @property boolean $defaultFlag
 * @property string $billingOptions
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Finance\Metadata',
    ];
}
