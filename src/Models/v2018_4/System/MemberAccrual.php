<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberAccrual Version v2018_4
 *
 * Model for MemberAccrual
 *
 * @property Spinen\ConnectWise\Models\v2018_4\System\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_4\System\Metadata $_info
 * @property float $hours
 * @property integer $id
 * @property integer $year
 * @property string $accrualType
 * @property string $reason
 */
class MemberAccrual extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\System\Metadata',
        'accrualType' => 'string',
        'hours' => 'float',
        'id' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2018_4\System\MemberReference',
        'reason' => 'string',
        'year' => 'integer',
    ];
}
