<?php

namespace Spinen\ConnectWise\Models\v2018_6\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class UnitOfMeasureReference Version v2018_6
 *
 * Model for UnitOfMeasureReference
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $name
 */
class UnitOfMeasureReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'name' => 'string',
    ];
}
