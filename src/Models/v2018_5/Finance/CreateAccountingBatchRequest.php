<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CreateAccountingBatchRequest Version v2018_5
 *
 * Model for CreateAccountingBatchRequest
 *
 * @property array $processedRecordIds
 * @property bool $exportExpensesFlag
 * @property bool $exportInvoicesFlag
 * @property bool $exportProductsFlag
 * @property bool $summarizeExpenses
 * @property int $id
 * @property string $batchIdentifier
 * @property string $glInterfaceIdentifier
 */
class CreateAccountingBatchRequest extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'batchIdentifier' => 'string',
        'exportExpensesFlag' => 'boolean',
        'exportInvoicesFlag' => 'boolean',
        'exportProductsFlag' => 'boolean',
        'glInterfaceIdentifier' => 'string',
        'id' => 'integer',
        'processedRecordIds' => 'array',
        'summarizeExpenses' => 'boolean',
    ];
}
