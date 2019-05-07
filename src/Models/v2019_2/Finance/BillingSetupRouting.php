<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BillingSetupRouting
 *
 * @property integer $id
 * @property integer $sequenceNumber
 * @property string $invoiceRule
 * @property string $routingRule
 */
class BillingSetupRouting extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'sequenceNumber' => 'integer',
        'invoiceRule' => 'string',
        'routingRule' => 'string',
    ];
}
