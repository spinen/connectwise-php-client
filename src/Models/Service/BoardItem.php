<?php

namespace Spinen\ConnectWise\Models\Service;

use Spinen\ConnectWise\Support\Model;

class BoardItem extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'inactive' => 'boolean',
        'typeAssociations' => 'array',
        'addAllSubTypes' => 'boolean',
        'removeAllSubTypes' => 'boolean',
        'typeId' => 'integer',
        'boardId' => 'integer',
    ];
}
