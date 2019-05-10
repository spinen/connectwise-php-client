<?php

namespace Spinen\ConnectWise\Models\v2019_1\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ChargeCodeExpenseType Version v2019_1
 *
 * Model for ChargeCodeExpenseType
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_1\Time\ExpenseTypeReference $type
 * @property Spinen\ConnectWise\Models\v2019_1\Time\ChargeCodeReference $chargeCode
 * @property Spinen\ConnectWise\Models\v2019_1\Time\Metadata $_info
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
        'type' => 'Spinen\ConnectWise\Models\v2019_1\Time\ExpenseTypeReference',
        'chargeCode' => 'Spinen\ConnectWise\Models\v2019_1\Time\ChargeCodeReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Time\Metadata',
    ];
}
