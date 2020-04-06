<?php

namespace Spinen\ConnectWise\Models\v2019_5\Marketing;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class Count Version v2019_5
 *
 * Model for Count
 *
 * @property integer $count
 */
class Count extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'count' => 'integer'
    ];
}
