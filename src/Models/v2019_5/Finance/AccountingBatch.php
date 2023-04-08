<?php

namespace Spinen\ConnectWise\Models\v2019_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AccountingBatch Version v2019_5
 *
 * Model for AccountingBatch
 *
 * @property Metadata $_info
 * @property bool $closedFlag
 * @property bool $exportExpensesFlag
 * @property bool $exportInvoicesFlag
 * @property bool $exportProductsFlag
 * @property int $id
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
        '_info' => Metadata::class,
        'batchIdentifier' => 'string',
        'closedFlag' => 'boolean',
        'exportExpensesFlag' => 'boolean',
        'exportInvoicesFlag' => 'boolean',
        'exportProductsFlag' => 'boolean',
        'id' => 'integer',
    ];
}
