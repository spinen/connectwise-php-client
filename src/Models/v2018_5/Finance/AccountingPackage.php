<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AccountingPackage Version v2018_5
 *
 * Model for AccountingPackage
 *
 * @property integer $id
 * @property string $identifier
 * @property string $name
 * @property boolean $directTransferFlag
 * @property boolean $includeInvoicesFlag
 * @property string $invoiceFormat
 * @property boolean $includeExpenseFlag
 * @property boolean $transferExpenseAsBillFlag
 * @property string $expenseFormat
 * @property boolean $suppressMemoFlag
 * @property boolean $syncPaymentInfoFlag
 * @property boolean $includeSalesTaxFlag
 * @property boolean $enableTaxGroupsFlag
 * @property boolean $zeroDollarTaxAmountsFlag
 * @property boolean $includeItemsFlag
 * @property boolean $inventorySOHFlag
 * @property boolean $sendComponentAmountFlag
 * @property boolean $sendUomFlag
 * @property boolean $includeCogsEntriesFlag
 * @property boolean $includeCogsDropShipFlag
 * @property boolean $activeFlag
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\Metadata $_info
 */
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Finance\Metadata',
    ];
}
