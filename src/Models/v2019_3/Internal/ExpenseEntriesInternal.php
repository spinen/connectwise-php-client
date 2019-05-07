<?php

namespace Spinen\ConnectWise\Models\v2019_3\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseEntriesInternal
 *
 * @property integer $count
 */
class ExpenseEntriesInternal extends Model
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
