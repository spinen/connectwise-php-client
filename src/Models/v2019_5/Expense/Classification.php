<?php

namespace Spinen\ConnectWise\Models\v2019_5\Expense;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Classification Version v2019_5
 *
 * Model for Classification
 *
 * @property Metadata $_info
 * @property bool $companyFlag
 * @property bool $defaultFlag
 * @property bool $employeeFlag
 * @property float $multiplier
 * @property int $id
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
        'name' => 'string',
    ];
}
