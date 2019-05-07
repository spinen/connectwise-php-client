<?php

namespace Spinen\ConnectWise\Models\v2019_3\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BatchEntry
 *
 * @property integer $id
 * @property string $accountType
 * @property string $name
 * @property string $accountNumber
 * @property double $debit
 * @property double $credit
 * @property double $cost
 * @property string $item
 * @property string $salesCode
 * @property string $costOfGoodsSoldAccountNumber
 * @property string $transfer
 */
class BatchEntry extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'accountType' => 'string',
        'name' => 'string',
        'accountNumber' => 'string',
        'debit' => 'double',
        'credit' => 'double',
        'cost' => 'double',
        'item' => 'string',
        'salesCode' => 'string',
        'costOfGoodsSoldAccountNumber' => 'string',
        'transfer' => 'string',
    ];
}
