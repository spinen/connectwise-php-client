<?php

namespace Spinen\ConnectWise\Models\v2019_3\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ChargeCodeExpenseType
 *
 * @property integer $id
 */
class ChargeCodeExpenseType extends Model
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
