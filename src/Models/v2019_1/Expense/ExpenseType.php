<?php

namespace Spinen\ConnectWise\Models\v2019_1\Expense;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseType Version v2019_1
 *
 * Model for ExpenseType
 *
 * @property ExternalExpenseTypeIntegrationReference $externalIntegrationXRef
 * @property Metadata $_info
 * @property boolean $advancedAmountFlag
 * @property boolean $inactiveFlag
 * @property boolean $mileageFlag
 * @property boolean $quantityFlag
 * @property float $invoiceMarkupAmount
 * @property float $maxAmount
 * @property float $reimbursementRate
 * @property integer $id
 * @property string $amountCaption
 * @property string $billExpenses
 * @property string $integrationXRef
 * @property string $invoiceMarkupOption
 * @property string $name
 */
class ExpenseType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'advancedAmountFlag' => 'boolean',
        'amountCaption' => 'string',
        'billExpenses' => 'string',
        'externalIntegrationXRef' => ExternalExpenseTypeIntegrationReference::class,
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'integrationXRef' => 'string',
        'invoiceMarkupAmount' => 'float',
        'invoiceMarkupOption' => 'string',
        'maxAmount' => 'float',
        'mileageFlag' => 'boolean',
        'name' => 'string',
        'quantityFlag' => 'boolean',
        'reimbursementRate' => 'float',
    ];
}
