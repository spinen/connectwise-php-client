<?php

namespace Spinen\ConnectWise\Models\v2019_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AccountingPackageSetup Version v2019_5
 *
 * Model for AccountingPackageSetup
 *
 * @property AccountingPackageReference $accountingPackage
 * @property bool $directTransferFlag
 * @property bool $enableTaxGroupsFlag
 * @property bool $includeCogsDropShipFlag
 * @property bool $includeCogsEntriesFlag
 * @property bool $includeExpensesFlag
 * @property bool $includeInvoicesFlag
 * @property bool $includeItemsFlag
 * @property bool $includeSalesTaxFlag
 * @property bool $inventorySOHFlag
 * @property bool $sendComponentAmountFlag
 * @property bool $sendUomFlag
 * @property bool $suppressMemoFlag
 * @property bool $syncPaymentInfoFlag
 * @property bool $transferExpensesAsBillFlag
 * @property bool $zeroDollarTaxAmountsFlag
 * @property int $id
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
        'zeroDollarTaxAmountsFlag' => 'boolean',
    ];
}
