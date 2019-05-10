<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkRoleExemption Version v2019_2
 *
 * Model for WorkRoleExemption
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\WorkRoleReference $workRole
 * @property array $taxableLevels
 * @property integer $id
 */
class WorkRoleExemption extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Finance\Metadata',
        'id' => 'integer',
        'taxableLevels' => 'array',
        'workRole' => 'Spinen\ConnectWise\Models\v2019_2\Finance\WorkRoleReference',
    ];
}
