<?php

namespace Spinen\ConnectWise\Models\v2019_4\Finance;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExport Version v2019_4
 *
 * Model for GLExport
 *
 * @property GLExportSettings $exportSettings
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
        'exportSettings' => GLExportSettings::class,
        'inventoryTransfers' => 'array',
        'purchaseTransactions' => 'array',
        'transactions' => 'array',
        'vendors' => 'array'
    ];
}
