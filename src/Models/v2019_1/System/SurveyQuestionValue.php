<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SurveyQuestionValue Version v2019_1
 * 
 * Model for SurveyQuestionValue
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_1\System\SurveyReference $survey
 * @property Spinen\ConnectWise\Models\v2019_1\System\SurveyQuestionReference $question
 * @property string $value
 * @property boolean $defaultFlag
 * @property integer $pointValue
 * @property boolean $inactiveFlag
 * @property Spinen\ConnectWise\Models\v2019_1\System\Metadata $_info
 */
class SurveyQuestionValue extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'survey' => 'Spinen\ConnectWise\Models\v2019_1\System\SurveyReference',
        'question' => 'Spinen\ConnectWise\Models\v2019_1\System\SurveyQuestionReference',
        'value' => 'string',
        'defaultFlag' => 'boolean',
        'pointValue' => 'integer',
        'inactiveFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\System\Metadata',
    ];
}
