<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SurveyQuestionValue Version v2018_4
 *
 * Model for SurveyQuestionValue
 *
 * @property Metadata $_info
 * @property SurveyQuestionReference $question
 * @property SurveyReference $survey
 * @property bool $defaultFlag
 * @property bool $inactiveFlag
 * @property int $id
 * @property int $pointValue
 * @property string $value
 */
class SurveyQuestionValue extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'pointValue' => 'integer',
        'question' => SurveyQuestionReference::class,
        'survey' => SurveyReference::class,
        'value' => 'string',
    ];
}
