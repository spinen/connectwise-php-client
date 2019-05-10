<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class CreateAccountingBatchRequest Version v2019_2
 *
 * Model for CreateAccountingBatchRequest
 *
 * @property array $processedRecordIds
 * @property boolean $exportExpensesFlag
 * @property boolean $exportInvoicesFlag
 * @property boolean $exportProductsFlag
 * @property boolean $summarizeExpenses
 * @property integer $id
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
        'summarizeExpenses' => 'boolean'
    ];
}
