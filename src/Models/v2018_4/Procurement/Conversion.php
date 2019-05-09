<?php

namespace Spinen\ConnectWise\Models\v2018_4\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Conversion Version v2018_4
 * 
 * Model for Conversion
 *
 * @property integer $id
 * @property number $quantity
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\UnitOfMeasureReference $uomType
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\UnitOfMeasureReference $parentUOM
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\Metadata $_info
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
        'quantity' => 'number',
        'uomType' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\UnitOfMeasureReference',
        'parentUOM' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\UnitOfMeasureReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\Metadata',
    ];
}