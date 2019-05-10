<?php

namespace Spinen\ConnectWise\Models\v2019_3\Finance;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportAdjustmentTransactionDetail Version v2019_3
 *
 * Model for GLExportAdjustmentTransactionDetail
 *
 * @property IvItemReference $item
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
        'item' => IvItemReference::class,
        'memo' => 'string',
        'productAccountNumber' => 'string',
        'quantity' => 'integer',
        'total' => 'float'
    ];
}
