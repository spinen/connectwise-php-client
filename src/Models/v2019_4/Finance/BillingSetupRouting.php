<?php

namespace Spinen\ConnectWise\Models\v2019_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BillingSetupRouting Version v2019_4
 *
 * Model for BillingSetupRouting
 *
 * @property MemberReference $member
 * @property Metadata $_info
 * @property int $id
 * @property int $sequenceNumber
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
        '_info' => Metadata::class,
        'id' => 'integer',
        'invoiceRule' => 'string',
        'member' => MemberReference::class,
        'routingRule' => 'string',
        'sequenceNumber' => 'integer',
    ];
}
