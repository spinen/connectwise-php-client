<?php

namespace Spinen\ConnectWise\Models\v2018_5\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeAccrualDetail Version v2018_5
 *
 * Model for TimeAccrualDetail
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Time\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_5\Time\TimeAccrualReference $timeAccrual
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Time\Metadata',
        'accrualType' => 'string',
        'endYear' => 'integer',
        'hours' => 'float',
        'id' => 'integer',
        'startYear' => 'integer',
        'timeAccrual' => 'Spinen\ConnectWise\Models\v2018_5\Time\TimeAccrualReference',
    ];
}
