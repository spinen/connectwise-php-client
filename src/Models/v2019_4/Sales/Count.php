<?php

namespace Spinen\ConnectWise\Models\v2019_4\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Count Version v2019_4
 *
 * Model for Count
 *
 * @property int $count
 */
class Count extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'count' => 'integer',
    ];
}
