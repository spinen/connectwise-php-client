<?php

namespace Spinen\ConnectWise\Models\v2018_4\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceSurveyQuestion Version v2018_4
 *
 * Model for ServiceSurveyQuestion
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Service\Metadata $_info
 * @property array $options
 * @property boolean $includeFlag
 * @property boolean $requiredFlag
 * @property integer $id
 * @property integer $noAnswerPoints
 * @property integer $sequenceNumber
 * @property integer $surveyId
 * @property string $question
 * @property string $type
 */
class ServiceSurveyQuestion extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Service\Metadata',
        'id' => 'integer',
        'includeFlag' => 'boolean',
        'noAnswerPoints' => 'integer',
        'options' => 'array',
        'question' => 'string',
        'requiredFlag' => 'boolean',
        'sequenceNumber' => 'integer',
        'surveyId' => 'integer',
        'type' => 'string',
    ];
}
