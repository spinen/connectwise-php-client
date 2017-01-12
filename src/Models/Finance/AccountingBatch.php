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
        'thruDate'               => 'carbon',
        'transactionsClosedDate' => 'carbon',
        'locationId'             => 'integer',
        'summarizeInvoices'      => 'integer',
        //        'includedInvoiceIds'     => 'integer[]',
        //        'includedExpenseIds'     => 'integer[]',
        //        'includedProductIds'     => 'integer[]',
        //        'excludedInvoiceIds'     => 'integer[]',
        //        'excludedExpenseIds'     => 'integer[]',
        //        'excludedProductIds'     => 'integer[]',
        'id'                     => 'integer',
        'batchIdentifier'        => 'string',
        'exportInvoicesFlag'     => 'boolean',
        'exportExpensesFlag'     => 'boolean',
        'exportProductsFlag'     => 'boolean',
        'closedFlag'             => 'boolean',
        //        '_info'                  => 'Metadata',
    ];
}
