<?php

namespace Spinen\ConnectWise\Models\v2019_2\Expense;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseEntry
 *
 * @property integer $id
 * @property integer $chargeToId
 * @property string $chargeToType
 * @property double $amount
 * @property string $billableOption
 * @property carbon $date
 * @property integer $locationId
 * @property integer $businessUnitId
 * @property string $notes
 * @property double $invoiceAmount
 * @property array $taxes
 * @property string $status
 * @property double $billAmount
 * @property array $customFields
 */
class ExpenseEntry extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'chargeToId' => 'integer',
        'chargeToType' => 'string',
        'amount' => 'double',
        'billableOption' => 'string',
        'date' => 'carbon',
        'locationId' => 'integer',
        'businessUnitId' => 'integer',
        'notes' => 'string',
        'invoiceAmount' => 'double',
        'taxes' => 'array',
        'status' => 'string',
        'billAmount' => 'double',
        'customFields' => 'array',
    ];
}
