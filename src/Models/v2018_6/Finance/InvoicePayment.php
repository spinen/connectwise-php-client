<?php

namespace Spinen\ConnectWise\Models\v2018_6\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class InvoicePayment
 *
 * @property integer $id
 * @property string $type
 * @property double $amount
 * @property carbon $paymentDate
 * @property string $appliedBy
 */
class InvoicePayment extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'type' => 'string',
        'amount' => 'double',
        'paymentDate' => 'carbon',
        'appliedBy' => 'string',
    ];
}
