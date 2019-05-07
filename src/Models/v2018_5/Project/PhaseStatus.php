<?php

namespace Spinen\ConnectWise\Models\v2018_5\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PhaseStatus
 *
 * @property integer $id
 * @property string $name
 * @property boolean $defaultFlag
 * @property boolean $inactiveFlag
 * @property boolean $collapsedFlag
 * @property boolean $closedFlag
 * @property array $boardAssociationIds
 * @property string $customStatusIndicatorName
 */
class PhaseStatus extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'defaultFlag' => 'boolean',
        'inactiveFlag' => 'boolean',
        'collapsedFlag' => 'boolean',
        'closedFlag' => 'boolean',
        'boardAssociationIds' => 'array',
        'customStatusIndicatorName' => 'string',
    ];
}
