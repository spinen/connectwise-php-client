<?php

namespace Spinen\ConnectWise\Models\v2019_3\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BatchEntry Version v2019_3
 *
 * Model for BatchEntry
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\AdjustmentDetailReference $adjustmentDetail
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\ExpenseDetailReference $expense
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\InvoiceReference $invoice
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\PurchaseOrderLineItemReference $lineItem
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\PurchaseOrderReference $purchaseOrder
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Finance\Metadata',
        'accountNumber' => 'string',
        'accountType' => 'string',
        'adjustmentDetail' => 'Spinen\ConnectWise\Models\v2019_3\Finance\AdjustmentDetailReference',
        'cost' => 'float',
        'costOfGoodsSoldAccountNumber' => 'string',
        'credit' => 'float',
        'debit' => 'float',
        'expense' => 'Spinen\ConnectWise\Models\v2019_3\Finance\ExpenseDetailReference',
        'id' => 'integer',
        'invoice' => 'Spinen\ConnectWise\Models\v2019_3\Finance\InvoiceReference',
        'item' => 'string',
        'lineItem' => 'Spinen\ConnectWise\Models\v2019_3\Finance\PurchaseOrderLineItemReference',
        'name' => 'string',
        'purchaseOrder' => 'Spinen\ConnectWise\Models\v2019_3\Finance\PurchaseOrderReference',
        'salesCode' => 'string',
        'transfer' => 'string',
    ];
}
