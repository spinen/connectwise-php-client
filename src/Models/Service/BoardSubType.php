<?php

namespace Spinen\ConnectWise\Models\Service;

use Spinen\ConnectWise\Support\Model;

class BoardSubType extends Model
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
        'typeAssociationIds' => 'array',
        'addAllTypes' => 'boolean',
        'removeAllTypes' => 'boolean',
        'boardId' => 'integer',
    ];
}
