<?php

namespace Spinen\ConnectWise\Models\v2018_5\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ChargeCodeExpenseType Version v2018_5
 *
 * Model for ChargeCodeExpenseType
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Time\ChargeCodeReference $chargeCode
 * @property Spinen\ConnectWise\Models\v2018_5\Time\ExpenseTypeReference $type
 * @property Spinen\ConnectWise\Models\v2018_5\Time\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Time\Metadata',
        'chargeCode' => 'Spinen\ConnectWise\Models\v2018_5\Time\ChargeCodeReference',
        'id' => 'integer',
        'type' => 'Spinen\ConnectWise\Models\v2018_5\Time\ExpenseTypeReference',
    ];
}
