<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExport Version v2018_4
 *
 * Model for GLExport
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\GLExportSettings $exportSettings
 * @property array $adjustmentTransactions
 * @property array $customers
 * @property array $expenseBills
 * @property array $expenses
 * @property array $inventoryTransfers
 * @property array $purchaseTransactions
 * @property array $transactions
 * @property array $vendors
 */
class GLExport extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'adjustmentTransactions' => 'array',
        'customers' => 'array',
        'expenseBills' => 'array',
        'expenses' => 'array',
        'exportSettings' => 'Spinen\ConnectWise\Models\v2018_4\Finance\GLExportSettings',
        'inventoryTransfers' => 'array',
        'purchaseTransactions' => 'array',
        'transactions' => 'array',
        'vendors' => 'array',
    ];
}
