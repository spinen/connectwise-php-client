<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Payment Version v2019_1
 *
 * Model for Payment
 *
 * @property Carbon\Carbon $paymentDate
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\InvoiceReference $invoice
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Finance\Metadata',
        'amount' => 'float',
        'appliedBy' => 'string',
        'id' => 'integer',
        'invoice' => 'Spinen\ConnectWise\Models\v2019_1\Finance\InvoiceReference',
        'paymentDate' => 'Carbon\Carbon',
        'type' => 'string',
    ];
}
