<?php

namespace Spinen\ConnectWise\Models\v2019_2\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WarehouseBin Version v2019_2
 * 
 * Model for WarehouseBin
 *
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\WarehouseReference $warehouse
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\SystemDepartmentReference $department
 * @property number $minQuantity
 * @property number $maxQuantity
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\WarehouseBinReference $overflowBin
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\MemberReference $manager
 * @property number $length
 * @property number $width
 * @property number $height
 * @property number $weight
 * @property boolean $defaultFlag
 * @property boolean $inactiveFlag
 * @property integer $quantityOnHand
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\WarehouseBinReference $transferBin
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\Metadata $_info
 */
class WarehouseBin extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'warehouse' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\WarehouseReference',
        'location' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\SystemLocationReference',
        'department' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\SystemDepartmentReference',
        'minQuantity' => 'number',
        'maxQuantity' => 'number',
        'overflowBin' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\WarehouseBinReference',
        'manager' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\MemberReference',
        'length' => 'number',
        'width' => 'number',
        'height' => 'number',
        'weight' => 'number',
        'defaultFlag' => 'boolean',
        'inactiveFlag' => 'boolean',
        'quantityOnHand' => 'integer',
        'transferBin' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\WarehouseBinReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\Metadata',
    ];
}
