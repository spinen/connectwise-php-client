<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

class Crm extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'companyListCount' => 'integer',
        'lockProbabilityFlag' => 'boolean',
        'companyIdGenerationFlag' => 'boolean',
        'excludeSpacesFlag' => 'boolean',
        'field1Caption' => 'string',
        'field2Caption' => 'string',
        'field3Caption' => 'string',
        'field4Caption' => 'string',
        'field5Caption' => 'string',
        'field6Caption' => 'string',
        'field7Caption' => 'string',
        'field8Caption' => 'string',
        'field9Caption' => 'string',
        'field10Caption' => 'string',
        'primaryRepCaption' => 'string',
        'secondaryRepCaption' => 'string',
        'other1Caption' => 'string',
        'other2Caption' => 'string',
        'defaultYear' => 'boolean',
    ];
}
