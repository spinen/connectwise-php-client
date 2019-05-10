<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SurveyQuestionValue Version v2018_4
 *
 * Model for SurveyQuestionValue
 *
 * @property Spinen\ConnectWise\Models\v2018_4\System\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_4\System\SurveyQuestionReference $question
 * @property Spinen\ConnectWise\Models\v2018_4\System\SurveyReference $survey
 * @property boolean $defaultFlag
 * @property boolean $inactiveFlag
 * @property integer $id
 * @property integer $pointValue
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\System\Metadata',
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'pointValue' => 'integer',
        'question' => 'Spinen\ConnectWise\Models\v2018_4\System\SurveyQuestionReference',
        'survey' => 'Spinen\ConnectWise\Models\v2018_4\System\SurveyReference',
        'value' => 'string',
    ];
}
