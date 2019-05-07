<?php

namespace Spinen\ConnectWise\Models\v2019_2\Expense;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Classification
 *
 * @property integer $id
 * @property string $name
 * @property double $multiplier
 * @property boolean $defaultFlag
 * @property boolean $companyFlag
 * @property boolean $employeeFlag
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
        'multiplier' => 'double',
        'defaultFlag' => 'boolean',
        'companyFlag' => 'boolean',
        'employeeFlag' => 'boolean',
    ];
}
