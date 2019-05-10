<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class AccountingPackage Version v2019_2
 *
 * Model for AccountingPackage
 *
 * @property Metadata $_info
 * @property boolean $activeFlag
 * @property boolean $directTransferFlag
 * @property boolean $enableTaxGroupsFlag
 * @property boolean $includeCogsDropShipFlag
 * @property boolean $includeCogsEntriesFlag
 * @property boolean $includeExpenseFlag
 * @property boolean $includeInvoicesFlag
 * @property boolean $includeItemsFlag
 * @property boolean $includeSalesTaxFlag
 * @property boolean $inventorySOHFlag
 * @property boolean $sendComponentAmountFlag
 * @property boolean $sendUomFlag
 * @property boolean $suppressMemoFlag
 * @property boolean $syncPaymentInfoFlag
 * @property boolean $transferExpenseAsBillFlag
 * @property boolean $zeroDollarTaxAmountsFlag
 * @property integer $id
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
        'zeroDollarTaxAmountsFlag' => 'boolean'
    ];
}
