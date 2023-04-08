<?php

namespace Spinen\ConnectWise\Models\v2018_4\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class UnitOfMeasure Version v2018_4
 *
 * Model for UnitOfMeasure
 *
 * @property Metadata $_info
 * @property bool $defaultFlag
 * @property bool $inactiveFlag
 * @property int $id
 * @property string $name
 * @property string $uomScheduleXref
 */
class UnitOfMeasure extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'name' => 'string',
        'uomScheduleXref' => 'string',
    ];
}
