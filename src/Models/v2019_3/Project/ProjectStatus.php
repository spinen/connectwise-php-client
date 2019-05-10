<?php

namespace Spinen\ConnectWise\Models\v2019_3\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectStatus Version v2019_3
 *
 * Model for ProjectStatus
 *
 * @property integer $id
 * @property string $name
 * @property boolean $defaultFlag
 * @property boolean $inactiveFlag
 * @property boolean $noTimeFlag
 * @property boolean $closedFlag
 * @property Spinen\ConnectWise\Models\v2019_3\Project\StatusIndicatorReference $statusIndicator
 * @property string $customStatusIndicatorName
 * @property Spinen\ConnectWise\Models\v2019_3\Project\Metadata $_info
 */
class ProjectStatus extends Model
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
        'noTimeFlag' => 'boolean',
        'closedFlag' => 'boolean',
        'statusIndicator' => 'Spinen\ConnectWise\Models\v2019_3\Project\StatusIndicatorReference',
        'customStatusIndicatorName' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Project\Metadata',
    ];
}
