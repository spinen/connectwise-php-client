<?php

namespace Spinen\ConnectWise\Models\v2019_3\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Payment Version v2019_3
 *
 * Model for Payment
 *
 * @property Carbon\Carbon $paymentDate
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\InvoiceReference $credit
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\InvoiceReference $invoice
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\Metadata $_info
 * @property float $amount
 * @property integer $id
 * @property string $appliedBy
 * @property string $type
 */
class Payment extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Finance\Metadata',
        'amount' => 'float',
        'appliedBy' => 'string',
        'credit' => 'Spinen\ConnectWise\Models\v2019_3\Finance\InvoiceReference',
        'id' => 'integer',
        'invoice' => 'Spinen\ConnectWise\Models\v2019_3\Finance\InvoiceReference',
        'paymentDate' => 'Carbon\Carbon',
        'type' => 'string',
    ];
}
