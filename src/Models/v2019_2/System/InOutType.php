<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class InOutType
 *
 * @property integer $id
 * @property string $description
 */
class InOutType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'description' => 'string',
    ];
}
