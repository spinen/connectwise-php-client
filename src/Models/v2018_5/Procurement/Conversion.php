<?php

namespace Spinen\ConnectWise\Models\v2018_5\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Conversion Version v2018_5
 *
 * Model for Conversion
 *
 * @property Metadata $_info
 * @property UnitOfMeasureReference $parentUOM
 * @property UnitOfMeasureReference $uomType
 * @property float $quantity
 * @property int $id
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
        'uomType' => UnitOfMeasureReference::class,
    ];
}
