<?php

namespace Spinen\ConnectWise\Models\v2019_2\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ChargeCodeExpenseTypeInfo
 *
 * @property integer $id
 */
class ChargeCodeExpenseTypeInfo extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];
}
