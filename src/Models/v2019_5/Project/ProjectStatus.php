<?php

namespace Spinen\ConnectWise\Models\v2019_5\Project;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectStatus Version v2019_5
 *
 * Model for ProjectStatus
 *
 * @property Metadata $_info
 * @property StatusIndicatorReference $statusIndicator
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
        '_info' => Metadata::class,
        'closedFlag' => 'boolean',
        'customStatusIndicatorName' => 'string',
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'name' => 'string',
        'noTimeFlag' => 'boolean',
        'statusIndicator' => StatusIndicatorReference::class
    ];
}
