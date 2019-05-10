<?php

namespace Spinen\ConnectWise\Models\v2019_2\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ChargeCode Version v2019_2
 *
 * Model for ChargeCode
 *
 * @property CompanyReference $company
 * @property Metadata $_info
 * @property SystemDepartmentReference $department
 * @property SystemLocationReference $location
 * @property WorkRoleReference $workRole
 * @property WorkTypeReference $workType
 * @property array $expenseTypeIds
 * @property boolean $allowAllExpenseTypeFlag
 * @property boolean $expenseEntryFlag
 * @property boolean $timeEntryFlag
 * @property integer $id
 * @property string $billTime
 * @property string $integrationXref
 * @property string $name
 */
class ChargeCode extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'allowAllExpenseTypeFlag' => 'boolean',
        'billTime' => 'string',
        'company' => CompanyReference::class,
        'department' => SystemDepartmentReference::class,
        'expenseEntryFlag' => 'boolean',
        'expenseTypeIds' => 'array',
        'id' => 'integer',
        'integrationXref' => 'string',
        'location' => SystemLocationReference::class,
        'name' => 'string',
        'timeEntryFlag' => 'boolean',
        'workRole' => WorkRoleReference::class,
        'workType' => WorkTypeReference::class,
    ];
}
