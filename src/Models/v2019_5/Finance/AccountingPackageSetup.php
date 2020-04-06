<?php

namespace Spinen\ConnectWise\Models\v2019_5\Finance;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class AccountingPackageSetup Version v2019_5
 *
 * Model for AccountingPackageSetup
 *
 * @property AccountingPackageReference $accountingPackage
 * @property boolean $directTransferFlag
 * @property boolean $enableTaxGroupsFlag
 * @property boolean $includeCogsDropShipFlag
 * @property boolean $includeCogsEntriesFlag
 * @property boolean $includeExpensesFlag
 * @property boolean $includeInvoicesFlag
 * @property boolean $includeItemsFlag
 * @property boolean $includeSalesTaxFlag
 * @property boolean $inventorySOHFlag
 * @property boolean $sendComponentAmountFlag
 * @property boolean $sendUomFlag
 * @property boolean $suppressMemoFlag
 * @property boolean $syncPaymentInfoFlag
 * @property boolean $transferExpensesAsBillFlag
 * @property boolean $zeroDollarTaxAmountsFlag
 * @property integer $id
 * @property string $expenseFormat
 * @property string $invoiceFormat
 */
class AccountingPackageSetup extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'accountingPackage' => AccountingPackageReference::class,
        'directTransferFlag' => 'boolean',
        'enableTaxGroupsFlag' => 'boolean',
        'expenseFormat' => 'string',
        'id' => 'integer',
        'includeCogsDropShipFlag' => 'boolean',
        'includeCogsEntriesFlag' => 'boolean',
        'includeExpensesFlag' => 'boolean',
        'includeInvoicesFlag' => 'boolean',
        'includeItemsFlag' => 'boolean',
        'includeSalesTaxFlag' => 'boolean',
        'inventorySOHFlag' => 'boolean',
        'invoiceFormat' => 'string',
        'sendComponentAmountFlag' => 'boolean',
        'sendUomFlag' => 'boolean',
        'suppressMemoFlag' => 'boolean',
        'syncPaymentInfoFlag' => 'boolean',
        'transferExpensesAsBillFlag' => 'boolean',
        'zeroDollarTaxAmountsFlag' => 'boolean'
    ];
}
