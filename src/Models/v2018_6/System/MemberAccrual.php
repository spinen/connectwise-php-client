<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberAccrual Version v2018_6
 *
 * Model for MemberAccrual
 *
 * @property MemberReference $member
 * @property Metadata $_info
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
        '_info' => Metadata::class,
        'accrualType' => 'string',
        'hours' => 'float',
        'id' => 'integer',
        'member' => MemberReference::class,
        'reason' => 'string',
        'year' => 'integer',
    ];
}
