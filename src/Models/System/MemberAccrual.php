<?php

namespace Spinen\ConnectWise\Models\System;

use Spinen\ConnectWise\Support\Model;

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
