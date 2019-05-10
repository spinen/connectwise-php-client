<?php

namespace Spinen\ConnectWise\Models\v2019_1\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Conversion Version v2019_1
 * 
 * Model for Conversion
 *
 * @property integer $id
 * @property float $quantity
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\UnitOfMeasureReference $uomType
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\UnitOfMeasureReference $parentUOM
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\Metadata $_info
 */
class Conversion extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'quantity' => 'float',
        'uomType' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\UnitOfMeasureReference',
        'parentUOM' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\UnitOfMeasureReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\Metadata',
    ];
}
