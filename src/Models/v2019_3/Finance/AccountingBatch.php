<?php

namespace Spinen\ConnectWise\Models\v2019_3\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AccountingBatch Version v2019_3
 *
 * Model for AccountingBatch
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\Metadata $_info
 * @property boolean $closedFlag
 * @property boolean $exportExpensesFlag
 * @property boolean $exportInvoicesFlag
 * @property boolean $exportProductsFlag
 * @property integer $id
 * @property string $batchIdentifier
 */
class AccountingBatch extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Finance\Metadata',
        'batchIdentifier' => 'string',
        'closedFlag' => 'boolean',
        'exportExpensesFlag' => 'boolean',
        'exportInvoicesFlag' => 'boolean',
        'exportProductsFlag' => 'boolean',
        'id' => 'integer',
    ];
}
