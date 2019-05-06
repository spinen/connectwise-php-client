<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

class AccountingPackage extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string',
        'directTransferFlag' => 'boolean',
        'includeInvoicesFlag' => 'boolean',
        'invoiceFormat' => 'string',
        'includeExpenseFlag' => 'boolean',
        'transferExpenseAsBillFlag' => 'boolean',
        'expenseFormat' => 'string',
        'suppressMemoFlag' => 'boolean',
        'syncPaymentInfoFlag' => 'boolean',
        'includeSalesTaxFlag' => 'boolean',
        'enableTaxGroupsFlag' => 'boolean',
        'zeroDollarTaxAmountsFlag' => 'boolean',
        'includeItemsFlag' => 'boolean',
        'inventorySOHFlag' => 'boolean',
        'sendComponentAmountFlag' => 'boolean',
        'sendUomFlag' => 'boolean',
        'includeCogsEntriesFlag' => 'boolean',
        'includeCogsDropShipFlag' => 'boolean',
        'activeFlag' => 'boolean',
    ];
}
