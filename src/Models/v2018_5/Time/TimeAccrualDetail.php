<?php

namespace Spinen\ConnectWise\Models\v2018_5\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeAccrualDetail
 *
 * @property integer $id
 * @property string $accrualType
 * @property integer $startYear
 * @property integer $endYear
 * @property double $hours
 */
class TimeAccrualDetail extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'accrualType' => 'string',
        'startYear' => 'integer',
        'endYear' => 'integer',
        'hours' => 'double',
    ];
}
