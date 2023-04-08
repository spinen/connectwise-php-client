<?php

namespace Spinen\ConnectWise\Models\v2019_4\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ConfigurationTypeQuestion Version v2019_4
 *
 * Model for ConfigurationTypeQuestion
 *
 * @property ConfigurationTypeReference $configurationType
 * @property Metadata $_info
 * @property bool $inactiveFlag
 * @property bool $requiredFlag
 * @property float $sequenceNumber
 * @property int $id
 * @property int $numberOfDecimals
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
        '_info' => Metadata::class,
        'configurationType' => ConfigurationTypeReference::class,
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
