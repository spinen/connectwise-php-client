<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Payment Version v2019_1
 * 
 * Model for Payment
 *
 * @property integer $id
 * @property string $type
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\InvoiceReference $invoice
 * @property number $amount
 * @property string $paymentDate
 * @property string $appliedBy
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\Metadata $_info
 */
class Payment extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'type' => 'string',
        'invoice' => 'Spinen\ConnectWise\Models\v2019_1\Finance\InvoiceReference',
        'amount' => 'number',
        'paymentDate' => 'string',
        'appliedBy' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Finance\Metadata',
    ];
}
