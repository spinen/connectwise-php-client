<?php

namespace Spinen\ConnectWise\Models\v2019_5\Time;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeAccrualDetail Version v2019_5
 *
 * Model for TimeAccrualDetail
 *
 * @property Metadata $_info
 * @property TimeAccrualReference $timeAccrual
 * @property float $hours
 * @property integer $endYear
 * @property integer $id
 * @property integer $startYear
 * @property string $accrualType
 */
class TimeAccrualDetail extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'accrualType' => 'string',
        'endYear' => 'integer',
        'hours' => 'float',
        'id' => 'integer',
        'startYear' => 'integer',
        'timeAccrual' => TimeAccrualReference::class
    ];
}
