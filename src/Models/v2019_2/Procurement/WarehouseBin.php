<?php

namespace Spinen\ConnectWise\Models\v2019_2\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WarehouseBin Version v2019_2
 *
 * Model for WarehouseBin
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\MemberReference $manager
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\WarehouseBinReference $overflowBin
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\WarehouseBinReference $transferBin
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\WarehouseReference $warehouse
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\Metadata',
        'defaultFlag' => 'boolean',
        'department' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\SystemDepartmentReference',
        'height' => 'float',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'length' => 'float',
        'location' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\SystemLocationReference',
        'manager' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\MemberReference',
        'maxQuantity' => 'float',
        'minQuantity' => 'float',
        'name' => 'string',
        'overflowBin' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\WarehouseBinReference',
        'quantityOnHand' => 'integer',
        'transferBin' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\WarehouseBinReference',
        'warehouse' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\WarehouseReference',
        'weight' => 'float',
        'width' => 'float',
    ];
}
