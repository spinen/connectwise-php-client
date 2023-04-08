<?php

namespace Spinen\ConnectWise\Models\v2019_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkRoleExemption Version v2019_4
 *
 * Model for WorkRoleExemption
 *
 * @property Metadata $_info
 * @property WorkRoleReference $workRole
 * @property array $taxableLevels
 * @property int $id
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
        'workRole' => WorkRoleReference::class,
    ];
}
