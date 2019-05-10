<?php

namespace Spinen\ConnectWise\Models\v2019_2\Expense;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseTaxTypeInfo Version v2019_2
 *
 * Model for ExpenseTaxTypeInfo
 *
 * @property Metadata $_info
 * @property boolean $inactive
 * @property integer $id
 * @property string $name
 */
class ExpenseTaxTypeInfo extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'inactive' => 'boolean',
        'name' => 'string'
    ];
}
