<?php

namespace Spinen\ConnectWise\Models\Company;

use Spinen\ConnectWise\Support\Model;

class ConfigurationTypeQuestions extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id'                   => 'integer',
        'configurationTypeId ' => 'integer',
        //        'fieldType'            => 'Enum',
        //        'entryType'            => 'Enum',
        'sequenceNumber'       => 'double',
        'question'             => 'string',
        'numberOfDecimals'     => 'integer',
        'requiredFlag'         => 'boolean',
        'inactiveFlag'         => 'boolean',
        //        'possibleAnswers'      => 'string[]',
        //        '_info '               => 'Metadata',
    ];
}
