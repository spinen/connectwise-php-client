<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CreateAccountingBatchRequest Version v2018_5
 * 
 * Model for CreateAccountingBatchRequest
 *
 * @property integer $id
 * @property string $batchIdentifier
 * @property string $glInterfaceIdentifier
 * @property boolean $exportInvoicesFlag
 * @property boolean $exportExpensesFlag
 * @property boolean $exportProductsFlag
 * @property array $processedRecordIds
 * @property boolean $summarizeExpenses
 */
class CreateAccountingBatchRequest extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'batchIdentifier' => 'string',
        'glInterfaceIdentifier' => 'string',
        'exportInvoicesFlag' => 'boolean',
        'exportExpensesFlag' => 'boolean',
        'exportProductsFlag' => 'boolean',
        'processedRecordIds' => 'array',
        'summarizeExpenses' => 'boolean',
    ];
}
