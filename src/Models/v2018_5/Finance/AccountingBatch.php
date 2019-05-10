<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AccountingBatch Version v2018_5
 *
 * Model for AccountingBatch
 *
 * @property integer $id
 * @property string $batchIdentifier
 * @property boolean $exportInvoicesFlag
 * @property boolean $exportExpensesFlag
 * @property boolean $exportProductsFlag
 * @property boolean $closedFlag
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Finance\Metadata',
    ];
}
