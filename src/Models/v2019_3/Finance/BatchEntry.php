<?php

namespace Spinen\ConnectWise\Models\v2019_3\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BatchEntry Version v2019_3
 *
 * Model for BatchEntry
 *
 * @property integer $id
 * @property string $accountType
 * @property string $name
 * @property string $accountNumber
 * @property float $debit
 * @property float $credit
 * @property float $cost
 * @property string $item
 * @property string $salesCode
 * @property string $costOfGoodsSoldAccountNumber
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\InvoiceReference $invoice
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\PurchaseOrderReference $purchaseOrder
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\PurchaseOrderLineItemReference $lineItem
 * @property string $transfer
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\ExpenseDetailReference $expense
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\AdjustmentDetailReference $adjustmentDetail
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\Metadata $_info
 */
class BatchEntry extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'accountType' => 'string',
        'name' => 'string',
        'accountNumber' => 'string',
        'debit' => 'float',
        'credit' => 'float',
        'cost' => 'float',
        'item' => 'string',
        'salesCode' => 'string',
        'costOfGoodsSoldAccountNumber' => 'string',
        'invoice' => 'Spinen\ConnectWise\Models\v2019_3\Finance\InvoiceReference',
        'purchaseOrder' => 'Spinen\ConnectWise\Models\v2019_3\Finance\PurchaseOrderReference',
        'lineItem' => 'Spinen\ConnectWise\Models\v2019_3\Finance\PurchaseOrderLineItemReference',
        'transfer' => 'string',
        'expense' => 'Spinen\ConnectWise\Models\v2019_3\Finance\ExpenseDetailReference',
        'adjustmentDetail' => 'Spinen\ConnectWise\Models\v2019_3\Finance\AdjustmentDetailReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Finance\Metadata',
    ];
}
