<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AccountingPackage Version v2019_2
 *
 * Model for AccountingPackage
 *
 * @property Metadata $_info
 * @property bool $activeFlag
 * @property bool $directTransferFlag
 * @property bool $enableTaxGroupsFlag
 * @property bool $includeCogsDropShipFlag
 * @property bool $includeCogsEntriesFlag
 * @property bool $includeExpenseFlag
 * @property bool $includeInvoicesFlag
 * @property bool $includeItemsFlag
 * @property bool $includeSalesTaxFlag
 * @property bool $inventorySOHFlag
 * @property bool $sendComponentAmountFlag
 * @property bool $sendUomFlag
 * @property bool $suppressMemoFlag
 * @property bool $syncPaymentInfoFlag
 * @property bool $transferExpenseAsBillFlag
 * @property bool $zeroDollarTaxAmountsFlag
 * @property int $id
 * @property string $expenseFormat
 * @property string $identifier
 * @property string $invoiceFormat
 * @property string $name
 */
class AccountingPackage extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'activeFlag' => 'boolean',
        'directTransferFlag' => 'boolean',
        'enableTaxGroupsFlag' => 'boolean',
        'expenseFormat' => 'string',
        'id' => 'integer',
        'identifier' => 'string',
        'includeCogsDropShipFlag' => 'boolean',
        'includeCogsEntriesFlag' => 'boolean',
        'includeExpenseFlag' => 'boolean',
        'includeInvoicesFlag' => 'boolean',
        'includeItemsFlag' => 'boolean',
        'includeSalesTaxFlag' => 'boolean',
        'inventorySOHFlag' => 'boolean',
        'invoiceFormat' => 'string',
        'name' => 'string',
        'sendComponentAmountFlag' => 'boolean',
        'sendUomFlag' => 'boolean',
        'suppressMemoFlag' => 'boolean',
        'syncPaymentInfoFlag' => 'boolean',
        'transferExpenseAsBillFlag' => 'boolean',
        'zeroDollarTaxAmountsFlag' => 'boolean',
    ];
}
