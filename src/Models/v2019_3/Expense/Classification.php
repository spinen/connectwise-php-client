<?php

namespace Spinen\ConnectWise\Models\v2019_3\Expense;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Classification Version v2019_3
 *
 * Model for Classification
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Expense\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Expense\Metadata',
        'companyFlag' => 'boolean',
        'defaultFlag' => 'boolean',
        'employeeFlag' => 'boolean',
        'id' => 'integer',
        'multiplier' => 'float',
        'name' => 'string',
    ];
}
