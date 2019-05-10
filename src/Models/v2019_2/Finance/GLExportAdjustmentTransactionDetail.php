<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportAdjustmentTransactionDetail Version v2019_2
 *
 * Model for GLExportAdjustmentTransactionDetail
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\IvItemReference $item
 * @property float $cost
 * @property float $total
 * @property integer $quantity
 * @property string $accountNumber
 * @property string $costAccountNumber
 * @property string $description
 * @property string $glClass
 * @property string $inventoryAccountNumber
 * @property string $memo
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
        'accountNumber' => 'string',
        'cost' => 'float',
        'costAccountNumber' => 'string',
        'description' => 'string',
        'glClass' => 'string',
        'inventoryAccountNumber' => 'string',
        'item' => 'Spinen\ConnectWise\Models\v2019_2\Finance\IvItemReference',
        'memo' => 'string',
        'productAccountNumber' => 'string',
        'quantity' => 'integer',
        'total' => 'float',
    ];
}
