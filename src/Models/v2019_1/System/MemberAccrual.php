<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberAccrual
 *
 * @property integer $id
 * @property string $accrualType
 * @property integer $year
 * @property double $hours
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
        'id' => 'integer',
        'accrualType' => 'string',
        'year' => 'integer',
        'hours' => 'double',
        'reason' => 'string',
    ];
}
