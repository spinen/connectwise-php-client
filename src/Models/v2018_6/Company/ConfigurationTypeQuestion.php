<?php

namespace Spinen\ConnectWise\Models\v2018_6\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ConfigurationTypeQuestion Version v2018_6
 *
 * Model for ConfigurationTypeQuestion
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_6\Company\ConfigurationTypeReference $configurationType
 * @property string $fieldType
 * @property string $entryType
 * @property float $sequenceNumber
 * @property string $question
 * @property integer $numberOfDecimals
 * @property boolean $requiredFlag
 * @property boolean $inactiveFlag
 * @property Spinen\ConnectWise\Models\v2018_6\Company\Metadata $_info
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
        'configurationType' => 'Spinen\ConnectWise\Models\v2018_6\Company\ConfigurationTypeReference',
        'fieldType' => 'string',
        'entryType' => 'string',
        'sequenceNumber' => 'float',
        'question' => 'string',
        'numberOfDecimals' => 'integer',
        'requiredFlag' => 'boolean',
        'inactiveFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Company\Metadata',
    ];
}
