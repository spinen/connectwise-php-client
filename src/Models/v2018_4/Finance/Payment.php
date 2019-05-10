<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Payment Version v2018_4
 * 
 * Model for Payment
 *
 * @property integer $id
 * @property string $type
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\InvoiceReference $invoice
 * @property float $amount
 * @property Carbon\Carbon $paymentDate
 * @property string $appliedBy
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\Metadata $_info
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
        'invoice' => 'Spinen\ConnectWise\Models\v2018_4\Finance\InvoiceReference',
        'amount' => 'float',
        'paymentDate' => 'Carbon\Carbon',
        'appliedBy' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Finance\Metadata',
    ];
}
