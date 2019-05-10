<?php

namespace Spinen\ConnectWise\Models\v2018_5\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PhaseStatus Version v2018_5
 *
 * Model for PhaseStatus
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Project\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_5\Project\StatusIndicatorReference $statusIndicator
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Project\Metadata',
        'boardAssociationIds' => 'array',
        'closedFlag' => 'boolean',
        'collapsedFlag' => 'boolean',
        'customStatusIndicatorName' => 'string',
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'name' => 'string',
        'statusIndicator' => 'Spinen\ConnectWise\Models\v2018_5\Project\StatusIndicatorReference',
    ];
}
