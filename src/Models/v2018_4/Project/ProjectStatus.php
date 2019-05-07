<?php

namespace Spinen\ConnectWise\Models\v2018_4\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectStatus
 *
 * @property integer $id
 * @property string $name
 * @property boolean $defaultFlag
 * @property boolean $inactiveFlag
 * @property boolean $noTimeFlag
 * @property boolean $closedFlag
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
    ];
}
