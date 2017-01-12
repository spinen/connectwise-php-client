<?php

namespace Spinen\ConnectWise\Models\Finance;

use Spinen\ConnectWise\Support\Model;

class AccountingBatch extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'thruDate' => 'carbon',
        'transactionsClosedDate' => 'carbon',
        'locationId' => 'integer',
        'summarizeInvoices' => 'integer',
        'includedInvoiceIds' => 'array',
        'includedExpenseIds' => 'array',
        'includedProductIds' => 'array',
        'excludedInvoiceIds' => 'array',
        'excludedExpenseIds' => 'array',
        'excludedProductIds' => 'array',
        'id' => 'integer',
        'batchIdentifier' => 'string',
        'exportInvoicesFlag' => 'boolean',
        'exportExpensesFlag' => 'boolean',
        'exportProductsFlag' => 'boolean',
        'closedFlag' => 'boolean',
    ];
}
