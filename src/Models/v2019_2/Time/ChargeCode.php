<?php

namespace Spinen\ConnectWise\Models\v2019_2\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ChargeCode Version v2019_2
 * 
 * Model for ChargeCode
 *
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2019_2\Time\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_2\Time\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2019_2\Time\SystemDepartmentReference $department
 * @property string $billTime
 * @property boolean $expenseEntryFlag
 * @property boolean $allowAllExpenseTypeFlag
 * @property boolean $timeEntryFlag
 * @property Spinen\ConnectWise\Models\v2019_2\Time\WorkTypeReference $workType
 * @property Spinen\ConnectWise\Models\v2019_2\Time\WorkRoleReference $workRole
 * @property string $integrationXref
 * @property array $expenseTypeIds
 * @property Spinen\ConnectWise\Models\v2019_2\Time\Metadata $_info
 */
class ChargeCode extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'company' => 'Spinen\ConnectWise\Models\v2019_2\Time\CompanyReference',
        'location' => 'Spinen\ConnectWise\Models\v2019_2\Time\SystemLocationReference',
        'department' => 'Spinen\ConnectWise\Models\v2019_2\Time\SystemDepartmentReference',
        'billTime' => 'string',
        'expenseEntryFlag' => 'boolean',
        'allowAllExpenseTypeFlag' => 'boolean',
        'timeEntryFlag' => 'boolean',
        'workType' => 'Spinen\ConnectWise\Models\v2019_2\Time\WorkTypeReference',
        'workRole' => 'Spinen\ConnectWise\Models\v2019_2\Time\WorkRoleReference',
        'integrationXref' => 'string',
        'expenseTypeIds' => 'array',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Time\Metadata',
    ];
}
