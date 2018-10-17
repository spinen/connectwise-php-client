<?php

namespace Spinen\ConnectWise\Models\Project;

use Spinen\ConnectWise\Support\Model;

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
        'customStatusIndicatorName' => 'string',
    ];
}
