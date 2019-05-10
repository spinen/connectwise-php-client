<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BillingSetupRouting Version v2019_1
 *
 * Model for BillingSetupRouting
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Finance\Metadata',
        'id' => 'integer',
        'invoiceRule' => 'string',
        'member' => 'Spinen\ConnectWise\Models\v2019_1\Finance\MemberReference',
        'routingRule' => 'string',
        'sequenceNumber' => 'integer',
    ];
}
