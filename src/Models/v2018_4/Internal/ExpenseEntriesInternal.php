<?php

namespace Spinen\ConnectWise\Models\v2018_4\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseEntriesInternal
 *
 * @property integer $id
 * @property double $amount
 * @property string $billableOption
 * @property carbon $date
 * @property string $notes
 * @property double $invoiceAmount
 * @property array $taxes
 * @property string $status
 * @property double $billAmount
 */
class ExpenseEntriesInternal extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'amount' => 'double',
        'billableOption' => 'string',
        'date' => 'carbon',
        'notes' => 'string',
        'invoiceAmount' => 'double',
        'taxes' => 'array',
        'status' => 'string',
        'billAmount' => 'double',
    ];
}
