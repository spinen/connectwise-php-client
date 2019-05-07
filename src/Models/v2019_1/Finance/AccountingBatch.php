<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AccountingBatch
 *
 * @property integer $id
 * @property string $batchIdentifier
 * @property boolean $exportInvoicesFlag
 * @property boolean $exportExpensesFlag
 * @property boolean $exportProductsFlag
 * @property boolean $closedFlag
 */
class AccountingBatch extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'batchIdentifier' => 'string',
        'exportInvoicesFlag' => 'boolean',
        'exportExpensesFlag' => 'boolean',
        'exportProductsFlag' => 'boolean',
        'closedFlag' => 'boolean',
    ];
}
