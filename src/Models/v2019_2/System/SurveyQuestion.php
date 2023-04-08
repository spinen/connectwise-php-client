<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SurveyQuestion Version v2019_2
 *
 * Model for SurveyQuestion
 *
 * @property Metadata $_info
 * @property SurveyReference $survey
 * @property bool $inactiveFlag
 * @property bool $requiredFlag
 * @property float $sequenceNumber
 * @property int $id
 * @property int $numberOfDecimals
 * @property string $entryType
 * @property string $fieldType
 * @property string $question
 */
class SurveyQuestion extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'entryType' => 'string',
        'fieldType' => 'string',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'numberOfDecimals' => 'integer',
        'question' => 'string',
        'requiredFlag' => 'boolean',
        'sequenceNumber' => 'float',
        'survey' => SurveyReference::class,
    ];
}
