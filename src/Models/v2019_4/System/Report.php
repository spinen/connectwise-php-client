<?php

namespace Spinen\ConnectWise\Models\v2019_4\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class Report Version v2019_4
 *
 * Model for Report
 *
 * @property string $name
 */
class Report extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string'
    ];
}
