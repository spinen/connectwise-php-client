<?php

namespace Spinen\ConnectWise\Models\v2018_6\Finance;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkRoleExemption Version v2018_6
 *
 * Model for WorkRoleExemption
 *
 * @property Metadata $_info
 * @property WorkRoleReference $workRole
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
        '_info' => Metadata::class,
        'id' => 'integer',
        'taxableLevels' => 'array',
        'workRole' => WorkRoleReference::class
    ];
}
