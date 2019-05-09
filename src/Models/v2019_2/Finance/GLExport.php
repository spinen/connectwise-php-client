<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExport Version v2019_2
 * 
 * Model for GLExport
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\GLExportSettings $exportSettings
 * @property array $vendors
 * @property array $customers
 * @property array $transactions
 * @property array $expenses
 * @property array $expenseBills
 * @property array $purchaseTransactions
 * @property array $adjustmentTransactions
 * @property array $inventoryTransfers
 */
class GLExport extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'exportSettings' => 'Spinen\ConnectWise\Models\v2019_2\Finance\GLExportSettings',
        'vendors' => 'array',
        'customers' => 'array',
        'transactions' => 'array',
        'expenses' => 'array',
        'expenseBills' => 'array',
        'purchaseTransactions' => 'array',
        'adjustmentTransactions' => 'array',
        'inventoryTransfers' => 'array',
    ];
}
