<?php

namespace Spinen\ConnectWise\Models\v2019_3\Project;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class PhaseStatus Version v2019_3
 *
 * Model for PhaseStatus
 *
 * @property Metadata $_info
 * @property StatusIndicatorReference $statusIndicator
 * @property array $boardAssociationIds
 * @property boolean $closedFlag
 * @property boolean $collapsedFlag
 * @property boolean $defaultFlag
 * @property boolean $inactiveFlag
 * @property integer $id
 * @property string $customStatusIndicatorName
 * @property string $name
 */
class PhaseStatus extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'boardAssociationIds' => 'array',
        'closedFlag' => 'boolean',
        'collapsedFlag' => 'boolean',
        'customStatusIndicatorName' => 'string',
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'name' => 'string',
        'statusIndicator' => StatusIndicatorReference::class
    ];
}
