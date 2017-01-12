<?php

namespace Spinen\ConnectWise\Models\System;

use Spinen\ConnectWise\Support\Model;

class UserDefinedField extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'podId' => 'integer',
        'caption' => 'string',
        'sequenceNumber' => 'integer',
        'helpText' => 'string',
        'fieldTypeIdentifier' => 'string',
        'numberDecimals' => 'integer',
        'entryTypeIdentifier' => 'string',
        'requiredFlag' => 'boolean',
        'displayOnScreenFlag' => 'boolean',
        'readOnlyFlag' => 'boolean',
        'listViewFlag' => 'boolean',
        'buttonUrl' => 'string',
        'options' => 'array',
        'businessUnitIds' => 'array',
        'locationIds' => 'array',
        'addAllBusinessUnits' => 'boolean',
        'removeAllBusinessUnits' => 'boolean',
        'addAllLocations' => 'boolean',
        'removeAllLocations' => 'boolean',
        'dateCreated' => 'carbon',
    ];
}
