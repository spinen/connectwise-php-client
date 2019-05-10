<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportAdjustmentTransactionDetail Version v2019_1
 * 
 * Model for GLExportAdjustmentTransactionDetail
 *
 * @property string $glClass
 * @property string $description
 * @property string $memo
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\IvItemReference $item
 * @property integer $quantity
 * @property float $total
 * @property float $cost
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
        'item' => 'Spinen\ConnectWise\Models\v2019_1\Finance\IvItemReference',
        'quantity' => 'integer',
        'total' => 'float',
        'cost' => 'float',
        'costAccountNumber' => 'string',
        'inventoryAccountNumber' => 'string',
        'accountNumber' => 'string',
        'productAccountNumber' => 'string',
    ];
}
