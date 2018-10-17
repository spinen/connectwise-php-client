<?php

namespace Spinen\ConnectWise\Models\Project;

use Spinen\ConnectWise\Support\Model;

class ProjectType extends Model
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
        'integrationXref' => 'string',
    ];
}
