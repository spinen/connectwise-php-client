<?php

namespace Spinen\ConnectWise\Models\v2018_6\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WarehouseBin Version v2018_6
 *
 * Model for WarehouseBin
 *
 * @property MemberReference $manager
 * @property Metadata $_info
 * @property SystemDepartmentReference $department
 * @property SystemLocationReference $location
 * @property WarehouseBinReference $overflowBin
 * @property WarehouseBinReference $transferBin
 * @property WarehouseReference $warehouse
 * @property boolean $defaultFlag
 * @property boolean $inactiveFlag
 * @property float $height
 * @property float $length
 * @property float $maxQuantity
 * @property float $minQuantity
 * @property float $weight
 * @property float $width
 * @property integer $id
 * @property integer $quantityOnHand
 * @property string $name
 */
class WarehouseBin extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'defaultFlag' => 'boolean',
        'department' => SystemDepartmentReference::class,
        'height' => 'float',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'length' => 'float',
        'location' => SystemLocationReference::class,
        'manager' => MemberReference::class,
        'maxQuantity' => 'float',
        'minQuantity' => 'float',
        'name' => 'string',
        'overflowBin' => WarehouseBinReference::class,
        'quantityOnHand' => 'integer',
        'transferBin' => WarehouseBinReference::class,
        'warehouse' => WarehouseReference::class,
        'weight' => 'float',
        'width' => 'float',
    ];
}
