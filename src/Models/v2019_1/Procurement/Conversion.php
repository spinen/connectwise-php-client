<?php

namespace Spinen\ConnectWise\Models\v2019_1\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Conversion Version v2019_1
 *
 * Model for Conversion
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\UnitOfMeasureReference $parentUOM
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\UnitOfMeasureReference $uomType
 * @property float $quantity
 * @property integer $id
 */
class Conversion extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\Metadata',
        'id' => 'integer',
        'parentUOM' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\UnitOfMeasureReference',
        'quantity' => 'float',
        'uomType' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\UnitOfMeasureReference',
    ];
}
