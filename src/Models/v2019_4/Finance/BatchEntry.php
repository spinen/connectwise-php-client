<?php

namespace Spinen\ConnectWise\Models\v2019_4\Finance;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class BatchEntry Version v2019_4
 *
 * Model for BatchEntry
 *
 * @property AdjustmentDetailReference $adjustmentDetail
 * @property ExpenseDetailReference $expense
 * @property InvoiceReference $invoice
 * @property Metadata $_info
 * @property PurchaseOrderLineItemReference $lineItem
 * @property PurchaseOrderReference $purchaseOrder
 * @property float $cost
 * @property float $credit
 * @property float $debit
 * @property integer $id
 * @property string $accountNumber
 * @property string $accountType
 * @property string $costOfGoodsSoldAccountNumber
 * @property string $item
 * @property string $name
 * @property string $salesCode
 * @property string $transfer
 */
class BatchEntry extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'accountNumber' => 'string',
        'accountType' => 'string',
        'adjustmentDetail' => AdjustmentDetailReference::class,
        'cost' => 'float',
        'costOfGoodsSoldAccountNumber' => 'string',
        'credit' => 'float',
        'debit' => 'float',
        'expense' => ExpenseDetailReference::class,
        'id' => 'integer',
        'invoice' => InvoiceReference::class,
        'item' => 'string',
        'lineItem' => PurchaseOrderLineItemReference::class,
        'name' => 'string',
        'purchaseOrder' => PurchaseOrderReference::class,
        'salesCode' => 'string',
        'transfer' => 'string'
    ];
}
