<?php

namespace Spinen\ConnectWise\Models\v2018_5\Expense;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseType Version v2018_5
 * 
 * Model for ExpenseType
 *
 * @property integer $id
 * @property string $name
 * @property string $amountCaption
 * @property number $reimbursementRate
 * @property string $billExpenses
 * @property string $invoiceMarkupOption
 * @property number $invoiceMarkupAmount
 * @property boolean $advancedAmountFlag
 * @property boolean $mileageFlag
 * @property boolean $quantityFlag
 * @property boolean $inactiveFlag
 * @property number $maxAmount
 * @property Spinen\ConnectWise\Models\v2018_5\Expense\ExternalExpenseTypeIntegrationReference $externalIntegrationXRef
 * @property string $integrationXRef
 * @property Spinen\ConnectWise\Models\v2018_5\Expense\Metadata $_info
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
        'reimbursementRate' => 'number',
        'billExpenses' => 'string',
        'invoiceMarkupOption' => 'string',
        'invoiceMarkupAmount' => 'number',
        'advancedAmountFlag' => 'boolean',
        'mileageFlag' => 'boolean',
        'quantityFlag' => 'boolean',
        'inactiveFlag' => 'boolean',
        'maxAmount' => 'number',
        'externalIntegrationXRef' => 'Spinen\ConnectWise\Models\v2018_5\Expense\ExternalExpenseTypeIntegrationReference',
        'integrationXRef' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Expense\Metadata',
    ];
}
