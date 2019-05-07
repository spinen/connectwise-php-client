<?php

namespace Spinen\ConnectWise\Models\v2019_3\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceSurveyQuestion
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
    ];
}
