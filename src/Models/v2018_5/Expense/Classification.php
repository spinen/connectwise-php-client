<?php

namespace Spinen\ConnectWise\Models\v2018_5\Expense;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Classification Version v2018_5
 *
 * Model for Classification
 *
 * @property integer $id
 * @property string $name
 * @property float $multiplier
 * @property boolean $defaultFlag
 * @property boolean $companyFlag
 * @property boolean $employeeFlag
 * @property Spinen\ConnectWise\Models\v2018_5\Expense\Metadata $_info
 */
class Classification extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'multiplier' => 'float',
        'defaultFlag' => 'boolean',
        'companyFlag' => 'boolean',
        'employeeFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Expense\Metadata',
    ];
}
