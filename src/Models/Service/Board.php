<?php

namespace Spinen\ConnectWise\Models\Service;

use Spinen\ConnectWise\Support\Model;

class Board extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'locationId' => 'integer',
        'businessUnitId' => 'integer',
        'inactive' => 'boolean',
        'sendToContact' => 'boolean',
        'contactTemplateId' => 'integer',
        'sendToResource' => 'boolean',
        'resourceTemplateId' => 'integer',
        'projectFlag' => 'boolean',
        'showDependenciesFlag' => 'boolean',
        'showEstimatesFlag' => 'boolean',
    ];
}
