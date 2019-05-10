<?php

namespace Spinen\ConnectWise\Models\v2018_6\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ChargeCodeExpenseType Version v2018_6
 *
 * Model for ChargeCodeExpenseType
 *
 * @property ChargeCodeReference $chargeCode
 * @property ExpenseTypeReference $type
 * @property Metadata $_info
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
        '_info' => Metadata::class,
        'chargeCode' => ChargeCodeReference::class,
        'id' => 'integer',
        'type' => ExpenseTypeReference::class,
    ];
}
