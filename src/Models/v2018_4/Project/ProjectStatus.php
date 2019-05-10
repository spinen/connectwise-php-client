<?php

namespace Spinen\ConnectWise\Models\v2018_4\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectStatus Version v2018_4
 *
 * Model for ProjectStatus
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Project\Metadata $_info
 * @property boolean $closedFlag
 * @property boolean $defaultFlag
 * @property boolean $inactiveFlag
 * @property boolean $noTimeFlag
 * @property integer $id
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Project\Metadata',
        'closedFlag' => 'boolean',
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'name' => 'string',
        'noTimeFlag' => 'boolean',
    ];
}
