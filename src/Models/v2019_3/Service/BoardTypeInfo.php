<?php

namespace Spinen\ConnectWise\Models\v2019_3\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardTypeInfo
 *
 * @property integer $id
 * @property string $name
 */
class BoardTypeInfo extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
    ];
}
