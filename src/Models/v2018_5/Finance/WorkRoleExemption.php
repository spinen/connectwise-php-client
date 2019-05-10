<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkRoleExemption Version v2018_5
 *
 * Model for WorkRoleExemption
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\WorkRoleReference $workRole
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Finance\Metadata',
        'id' => 'integer',
        'taxableLevels' => 'array',
        'workRole' => 'Spinen\ConnectWise\Models\v2018_5\Finance\WorkRoleReference',
    ];
}
