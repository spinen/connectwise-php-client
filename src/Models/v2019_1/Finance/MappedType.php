<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MappedType
 *
 * @property integer $id
 * @property string $name
 * @property string $table
 * @property string $recIdField
 * @property string $glType
 * @property integer $sortOrder
 */
class MappedType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'table' => 'string',
        'recIdField' => 'string',
        'glType' => 'string',
        'sortOrder' => 'integer',
    ];
}
