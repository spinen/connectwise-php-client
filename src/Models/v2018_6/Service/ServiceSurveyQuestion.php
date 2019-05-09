<?php

namespace Spinen\ConnectWise\Models\v2018_6\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceSurveyQuestion Version v2018_6
 * 
 * Model for ServiceSurveyQuestion
 *
 * @property integer $id
 * @property integer $sequenceNumber
 * @property string $type
 * @property string $question
 * @property array $options
 * @property boolean $includeFlag
 * @property boolean $requiredFlag
 * @property integer $noAnswerPoints
 * @property integer $surveyId
 * @property Spinen\ConnectWise\Models\v2018_6\Service\Metadata $_info
 */
class ServiceSurveyQuestion extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'sequenceNumber' => 'integer',
        'type' => 'string',
        'question' => 'string',
        'options' => 'array',
        'includeFlag' => 'boolean',
        'requiredFlag' => 'boolean',
        'noAnswerPoints' => 'integer',
        'surveyId' => 'integer',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Service\Metadata',
    ];
}
