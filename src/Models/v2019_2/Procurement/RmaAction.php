<?php

namespace Spinen\ConnectWise\Models\v2019_2\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class RmaAction
 *
 * @property integer $id
 * @property string $name
 * @property boolean $defaultFlag
 */
class RmaAction extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'defaultFlag' => 'boolean',
    ];
}
