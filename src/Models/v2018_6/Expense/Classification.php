<?php

namespace Spinen\ConnectWise\Models\v2018_6\Expense;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class Classification Version v2018_6
 *
 * Model for Classification
 *
 * @property Metadata $_info
 * @property boolean $companyFlag
 * @property boolean $defaultFlag
 * @property boolean $employeeFlag
 * @property float $multiplier
 * @property integer $id
 * @property string $name
 */
class Classification extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'companyFlag' => 'boolean',
        'defaultFlag' => 'boolean',
        'employeeFlag' => 'boolean',
        'id' => 'integer',
        'multiplier' => 'float',
        'name' => 'string'
    ];
}
