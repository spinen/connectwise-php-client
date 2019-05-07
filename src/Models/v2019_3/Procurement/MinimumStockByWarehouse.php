<?php

namespace Spinen\ConnectWise\Models\v2019_3\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MinimumStockByWarehouse
 *
 * @property integer $id
 * @property integer $minimumStock
 */
class MinimumStockByWarehouse extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'minimumStock' => 'integer',
    ];
}
