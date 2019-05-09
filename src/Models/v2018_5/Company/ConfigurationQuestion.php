<?php

namespace Spinen\ConnectWise\Models\v2018_5\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ConfigurationQuestion Version v2018_5
 * 
 * Model for ConfigurationQuestion
 *
 * @property integer $answerId
 * @property integer $questionId
 * @property string $question
 * @property string $answer
 * @property number $sequenceNumber
 * @property integer $numberOfDecimals
 * @property string $fieldType
 * @property boolean $requiredFlag
 */
class ConfigurationQuestion extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'answerId' => 'integer',
        'questionId' => 'integer',
        'question' => 'string',
        'answer' => 'string',
        'sequenceNumber' => 'number',
        'numberOfDecimals' => 'integer',
        'fieldType' => 'string',
        'requiredFlag' => 'boolean',
    ];
}
