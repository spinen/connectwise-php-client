<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class Payment Version v2019_1
 *
 * Model for Payment
 *
 * @property Carbon $paymentDate
 * @property InvoiceReference $invoice
 * @property Metadata $_info
 * @property float $amount
 * @property int $id
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
        '_info' => Metadata::class,
        'amount' => 'float',
        'appliedBy' => 'string',
        'id' => 'integer',
        'invoice' => InvoiceReference::class,
        'paymentDate' => Carbon::class,
        'type' => 'string',
    ];
}
