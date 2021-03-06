<?php

namespace Spinen\ConnectWise\Models\v2018_6\Expense;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class Count Version v2018_6
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
