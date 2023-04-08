<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MappedType Version v2019_2
 *
 * Model for MappedType
 *
 * @property int $id
 * @property int $sortOrder
 * @property string $glType
 * @property string $name
 * @property string $recIdField
 * @property string $table
 */
class MappedType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'glType' => 'string',
        'id' => 'integer',
        'name' => 'string',
        'recIdField' => 'string',
        'sortOrder' => 'integer',
        'table' => 'string',
    ];
}
