<?php

namespace Spinen\ConnectWise\Models\v2018_4\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ConfigurationTypeQuestion Version v2018_4
 *
 * Model for ConfigurationTypeQuestion
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Company\ConfigurationTypeReference $configurationType
 * @property Spinen\ConnectWise\Models\v2018_4\Company\Metadata $_info
 * @property boolean $inactiveFlag
 * @property boolean $requiredFlag
 * @property float $sequenceNumber
 * @property integer $id
 * @property integer $numberOfDecimals
 * @property string $entryType
 * @property string $fieldType
 * @property string $question
 */
class ConfigurationTypeQuestion extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Company\Metadata',
        'configurationType' => 'Spinen\ConnectWise\Models\v2018_4\Company\ConfigurationTypeReference',
        'entryType' => 'string',
        'fieldType' => 'string',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'numberOfDecimals' => 'integer',
        'question' => 'string',
        'requiredFlag' => 'boolean',
        'sequenceNumber' => 'float',
    ];
}
