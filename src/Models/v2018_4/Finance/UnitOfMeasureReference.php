<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class UnitOfMeasureReference Version v2018_4
 *
 * Model for UnitOfMeasureReference
 *
 * @property Metadata $_info
 * @property int $id
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
