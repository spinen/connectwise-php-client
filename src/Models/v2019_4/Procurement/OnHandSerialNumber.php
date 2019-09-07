<?php

namespace Spinen\ConnectWise\Models\v2019_4\Procurement;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class OnHandSerialNumber Version v2019_4
 *
 * Model for OnHandSerialNumber
 *
 * @property CatalogItemReference $catalogItem
 * @property Metadata $_info
 * @property WarehouseBinReference $warehouseBin
 * @property WarehouseReference $warehouse
 * @property integer $id
 * @property string $serial
 */
class OnHandSerialNumber extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'catalogItem' => CatalogItemReference::class,
        'id' => 'integer',
        'serial' => 'string',
        'warehouse' => WarehouseReference::class,
        'warehouseBin' => WarehouseBinReference::class
    ];
}
