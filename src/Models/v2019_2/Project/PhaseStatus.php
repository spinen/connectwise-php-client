<?php

namespace Spinen\ConnectWise\Models\v2019_2\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PhaseStatus Version v2019_2
 * 
 * Model for PhaseStatus
 *
 * @property integer $id
 * @property string $name
 * @property boolean $defaultFlag
 * @property boolean $inactiveFlag
 * @property boolean $collapsedFlag
 * @property boolean $closedFlag
 * @property array $boardAssociationIds
 * @property Spinen\ConnectWise\Models\v2019_2\Project\StatusIndicatorReference $statusIndicator
 * @property string $customStatusIndicatorName
 * @property Spinen\ConnectWise\Models\v2019_2\Project\Metadata $_info
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
        'statusIndicator' => 'Spinen\ConnectWise\Models\v2019_2\Project\StatusIndicatorReference',
        'customStatusIndicatorName' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Project\Metadata',
    ];
}
