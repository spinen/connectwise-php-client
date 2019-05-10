<?php

namespace Spinen\ConnectWise\Models\v2019_3\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Payment Version v2019_3
 * 
 * Model for Payment
 *
 * @property integer $id
 * @property string $type
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\InvoiceReference $invoice
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\InvoiceReference $credit
 * @property float $amount
 * @property Carbon\Carbon $paymentDate
 * @property string $appliedBy
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\Metadata $_info
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
        'invoice' => 'Spinen\ConnectWise\Models\v2019_3\Finance\InvoiceReference',
        'credit' => 'Spinen\ConnectWise\Models\v2019_3\Finance\InvoiceReference',
        'amount' => 'float',
        'paymentDate' => 'Carbon\Carbon',
        'appliedBy' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Finance\Metadata',
    ];
}
