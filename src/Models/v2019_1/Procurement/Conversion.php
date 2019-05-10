<?php

namespace Spinen\ConnectWise\Models\v2019_1\Procurement;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class Conversion Version v2019_1
 *
 * Model for Conversion
 *
 * @property Metadata $_info
 * @property UnitOfMeasureReference $parentUOM
 * @property UnitOfMeasureReference $uomType
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
        '_info' => Metadata::class,
        'id' => 'integer',
        'parentUOM' => UnitOfMeasureReference::class,
        'quantity' => 'float',
        'uomType' => UnitOfMeasureReference::class
    ];
}
