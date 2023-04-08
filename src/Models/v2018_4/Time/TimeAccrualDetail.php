<?php

namespace Spinen\ConnectWise\Models\v2018_4\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeAccrualDetail Version v2018_4
 *
 * Model for TimeAccrualDetail
 *
 * @property Metadata $_info
 * @property TimeAccrualReference $timeAccrual
 * @property float $hours
 * @property int $endYear
 * @property int $id
 * @property int $startYear
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
        'timeAccrual' => TimeAccrualReference::class,
    ];
}
