<?php

namespace Spinen\ConnectWise\Models\v2018_6\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExportAccountingBatchRequest Version v2018_6
 * 
 * Model for ExportAccountingBatchRequest
 *
 * @property string $batchIdentifier
 * @property string $glInterfaceIdentifier
 * @property string $thruDate
 * @property integer $locationId
 * @property string $summarizeInvoices
 * @property boolean $exportInvoicesFlag
 * @property array $includedInvoiceIds
 * @property array $excludedInvoiceIds
 * @property boolean $exportExpensesFlag
 * @property array $includedExpenseIds
 * @property array $excludedExpenseIds
 * @property boolean $exportProductsFlag
 * @property array $includedProductIds
 * @property array $excludedProductIds
 */
class ExportAccountingBatchRequest extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'batchIdentifier' => 'string',
        'glInterfaceIdentifier' => 'string',
        'thruDate' => 'string',
        'locationId' => 'integer',
        'summarizeInvoices' => 'string',
        'exportInvoicesFlag' => 'boolean',
        'includedInvoiceIds' => 'array',
        'excludedInvoiceIds' => 'array',
        'exportExpensesFlag' => 'boolean',
        'includedExpenseIds' => 'array',
        'excludedExpenseIds' => 'array',
        'exportProductsFlag' => 'boolean',
        'includedProductIds' => 'array',
        'excludedProductIds' => 'array',
    ];
}