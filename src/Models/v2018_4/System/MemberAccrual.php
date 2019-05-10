<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberAccrual Version v2018_4
 *
 * Model for MemberAccrual
 *
 * @property integer $id
 * @property string $accrualType
 * @property integer $year
 * @property float $hours
 * @property string $reason
 * @property Spinen\ConnectWise\Models\v2018_4\System\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_4\System\Metadata $_info
 */
class MemberAccrual extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'accrualType' => 'string',
        'year' => 'integer',
        'hours' => 'float',
        'reason' => 'string',
        'member' => 'Spinen\ConnectWise\Models\v2018_4\System\MemberReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\System\Metadata',
    ];
}
