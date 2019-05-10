<?php

namespace Spinen\ConnectWise\Models\v2018_5\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ChargeCode Version v2018_5
 *
 * Model for ChargeCode
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Time\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2018_5\Time\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_5\Time\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2018_5\Time\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2018_5\Time\WorkRoleReference $workRole
 * @property Spinen\ConnectWise\Models\v2018_5\Time\WorkTypeReference $workType
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Time\Metadata',
        'allowAllExpenseTypeFlag' => 'boolean',
        'billTime' => 'string',
        'company' => 'Spinen\ConnectWise\Models\v2018_5\Time\CompanyReference',
        'department' => 'Spinen\ConnectWise\Models\v2018_5\Time\SystemDepartmentReference',
        'expenseEntryFlag' => 'boolean',
        'expenseTypeIds' => 'array',
        'id' => 'integer',
        'integrationXref' => 'string',
        'location' => 'Spinen\ConnectWise\Models\v2018_5\Time\SystemLocationReference',
        'name' => 'string',
        'timeEntryFlag' => 'boolean',
        'workRole' => 'Spinen\ConnectWise\Models\v2018_5\Time\WorkRoleReference',
        'workType' => 'Spinen\ConnectWise\Models\v2018_5\Time\WorkTypeReference',
    ];
}
