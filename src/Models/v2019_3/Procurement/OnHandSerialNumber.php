<?php

namespace Spinen\ConnectWise\Models\v2019_3\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OnHandSerialNumber
 *
 * @property integer $id
 * @property string $serial
 */
class OnHandSerialNumber extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'serial' => 'string',
    ];
}
