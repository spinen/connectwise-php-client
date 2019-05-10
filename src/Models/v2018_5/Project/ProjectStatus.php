<?php

namespace Spinen\ConnectWise\Models\v2018_5\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectStatus Version v2018_5
 *
 * Model for ProjectStatus
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Project\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_5\Project\StatusIndicatorReference $statusIndicator
 * @property boolean $closedFlag
 * @property boolean $defaultFlag
 * @property boolean $inactiveFlag
 * @property boolean $noTimeFlag
 * @property integer $id
 * @property string $customStatusIndicatorName
 * @property string $name
 */
class ProjectStatus extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Project\Metadata',
        'closedFlag' => 'boolean',
        'customStatusIndicatorName' => 'string',
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'name' => 'string',
        'noTimeFlag' => 'boolean',
        'statusIndicator' => 'Spinen\ConnectWise\Models\v2018_5\Project\StatusIndicatorReference',
    ];
}
