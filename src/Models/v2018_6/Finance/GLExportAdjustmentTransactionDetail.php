<?php

namespace Spinen\ConnectWise\Models\v2018_6\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportAdjustmentTransactionDetail Version v2018_6
 * 
 * Model for GLExportAdjustmentTransactionDetail
 *
 * @property string $glClass
 * @property string $description
 * @property string $memo
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\IvItemReference $item
 * @property integer $quantity
 * @property number $total
 * @property number $cost
 * @property string $costAccountNumber
 * @property string $inventoryAccountNumber
 * @property string $accountNumber
 * @property string $productAccountNumber
 */
class GLExportAdjustmentTransactionDetail extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'glClass' => 'string',
        'description' => 'string',
        'memo' => 'string',
        'item' => 'Spinen\ConnectWise\Models\v2018_6\Finance\IvItemReference',
        'quantity' => 'integer',
        'total' => 'number',
        'cost' => 'number',
        'costAccountNumber' => 'string',
        'inventoryAccountNumber' => 'string',
        'accountNumber' => 'string',
        'productAccountNumber' => 'string',
    ];
}