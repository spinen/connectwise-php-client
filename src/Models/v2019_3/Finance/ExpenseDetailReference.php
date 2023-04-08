<?php

namespace Spinen\ConnectWise\Models\v2019_3\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseDetailReference Version v2019_3
 *
 * Model for ExpenseDetailReference
 *
 * @property Metadata $_info
 * @property float $amount
 * @property int $id
 */
class ExpenseDetailReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'amount' => 'float',
        'id' => 'integer',
    ];
}
