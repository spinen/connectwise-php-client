<?php

namespace Spinen\ConnectWise\Models\v2019_3\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseDetailReference Version v2019_3
 * 
 * Model for ExpenseDetailReference
 *
 * @property integer $id
 * @property number $amount
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\Metadata $_info
 */
class ExpenseDetailReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'amount' => 'number',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Finance\Metadata',
    ];
}
