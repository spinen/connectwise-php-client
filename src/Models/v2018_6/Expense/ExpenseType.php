<?php

namespace Spinen\ConnectWise\Models\v2018_6\Expense;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseType Version v2018_6
 * 
 * Model for ExpenseType
 *
 * @property integer $id
 * @property string $name
 * @property string $amountCaption
 * @property float $reimbursementRate
 * @property string $billExpenses
 * @property string $invoiceMarkupOption
 * @property float $invoiceMarkupAmount
 * @property boolean $advancedAmountFlag
 * @property boolean $mileageFlag
 * @property boolean $quantityFlag
 * @property boolean $inactiveFlag
 * @property float $maxAmount
 * @property Spinen\ConnectWise\Models\v2018_6\Expense\ExternalExpenseTypeIntegrationReference $externalIntegrationXRef
 * @property string $integrationXRef
 * @property Spinen\ConnectWise\Models\v2018_6\Expense\Metadata $_info
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
        'reimbursementRate' => 'float',
        'billExpenses' => 'string',
        'invoiceMarkupOption' => 'string',
        'invoiceMarkupAmount' => 'float',
        'advancedAmountFlag' => 'boolean',
        'mileageFlag' => 'boolean',
        'quantityFlag' => 'boolean',
        'inactiveFlag' => 'boolean',
        'maxAmount' => 'float',
        'externalIntegrationXRef' => 'Spinen\ConnectWise\Models\v2018_6\Expense\ExternalExpenseTypeIntegrationReference',
        'integrationXRef' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Expense\Metadata',
    ];
}
