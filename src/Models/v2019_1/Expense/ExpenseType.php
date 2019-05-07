<?php

namespace Spinen\ConnectWise\Models\v2019_1\Expense;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseType
 *
 * @property integer $id
 * @property string $name
 * @property string $amountCaption
 * @property double $reimbursementRate
 * @property string $billExpenses
 * @property string $invoiceMarkupOption
 * @property double $invoiceMarkupAmount
 * @property boolean $advancedAmountFlag
 * @property boolean $mileageFlag
 * @property boolean $quantityFlag
 * @property boolean $inactiveFlag
 * @property double $maxAmount
 * @property string $integrationXRef
 */
class ExpenseType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'amountCaption' => 'string',
        'reimbursementRate' => 'double',
        'billExpenses' => 'string',
        'invoiceMarkupOption' => 'string',
        'invoiceMarkupAmount' => 'double',
        'advancedAmountFlag' => 'boolean',
        'mileageFlag' => 'boolean',
        'quantityFlag' => 'boolean',
        'inactiveFlag' => 'boolean',
        'maxAmount' => 'double',
        'integrationXRef' => 'string',
    ];
}
