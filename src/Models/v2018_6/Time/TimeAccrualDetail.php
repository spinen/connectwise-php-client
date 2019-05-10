<?php

namespace Spinen\ConnectWise\Models\v2018_6\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeAccrualDetail Version v2018_6
 *
 * Model for TimeAccrualDetail
 *
 * @property integer $id
 * @property string $accrualType
 * @property integer $startYear
 * @property integer $endYear
 * @property float $hours
 * @property Spinen\ConnectWise\Models\v2018_6\Time\TimeAccrualReference $timeAccrual
 * @property Spinen\ConnectWise\Models\v2018_6\Time\Metadata $_info
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
        'hours' => 'float',
        'timeAccrual' => 'Spinen\ConnectWise\Models\v2018_6\Time\TimeAccrualReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Time\Metadata',
    ];
}
