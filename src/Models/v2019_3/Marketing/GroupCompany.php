<?php

namespace Spinen\ConnectWise\Models\v2019_3\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GroupCompany
 *
 * @property integer $count
 */
class GroupCompany extends Model
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
