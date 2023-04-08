<?php

namespace Spinen\ConnectWise\Models\v2019_2\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ConfigurationQuestion Version v2019_2
 *
 * Model for ConfigurationQuestion
 *
 * @property bool $requiredFlag
 * @property float $sequenceNumber
 * @property int $answerId
 * @property int $numberOfDecimals
 * @property int $questionId
 * @property string $answer
 * @property string $fieldType
 * @property string $question
 */
class ConfigurationQuestion extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'answer' => 'string',
        'answerId' => 'integer',
        'fieldType' => 'string',
        'numberOfDecimals' => 'integer',
        'question' => 'string',
        'questionId' => 'integer',
        'requiredFlag' => 'boolean',
        'sequenceNumber' => 'float',
    ];
}
