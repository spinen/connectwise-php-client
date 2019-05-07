<?php

namespace Spinen\ConnectWise\Models\v2018_4\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ConfigurationTypeQuestion
 *
 * @property integer $id
 * @property string $fieldType
 * @property string $entryType
 * @property double $sequenceNumber
 * @property string $question
 * @property integer $numberOfDecimals
 * @property boolean $requiredFlag
 * @property boolean $inactiveFlag
 */
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
