<?php

namespace Spinen\ConnectWise\Models\Company;

use Spinen\ConnectWise\Support\Model;

class ConfigurationTypeQuestion extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fieldType' => 'string',
        'entryType' => 'string',
        'sequenceNumber' => 'double',
        'question' => 'string',
        'numberOfDecimals' => 'integer',
        'requiredFlag' => 'boolean',
        'inactiveFlag' => 'boolean',
    ];
}
