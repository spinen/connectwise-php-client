<?php

namespace Spinen\ConnectWise\Models\v2019_3\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class UnitOfMeasure
 *
 * @property integer $id
 * @property string $name
 * @property boolean $inactiveFlag
 * @property boolean $defaultFlag
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
        'id' => 'integer',
        'name' => 'string',
        'inactiveFlag' => 'boolean',
        'defaultFlag' => 'boolean',
        'uomScheduleXref' => 'string',
    ];
}
