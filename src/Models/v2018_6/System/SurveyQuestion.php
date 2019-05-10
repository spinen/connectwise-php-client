<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class SurveyQuestion Version v2018_6
 *
 * Model for SurveyQuestion
 *
 * @property Metadata $_info
 * @property SurveyReference $survey
 * @property boolean $inactiveFlag
 * @property boolean $requiredFlag
 * @property float $sequenceNumber
 * @property integer $id
 * @property integer $numberOfDecimals
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
        'survey' => SurveyReference::class
    ];
}
