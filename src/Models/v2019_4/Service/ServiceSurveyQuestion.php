<?php

namespace Spinen\ConnectWise\Models\v2019_4\Service;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceSurveyQuestion Version v2019_4
 *
 * Model for ServiceSurveyQuestion
 *
 * @property Metadata $_info
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
        '_info' => Metadata::class,
        'id' => 'integer',
        'includeFlag' => 'boolean',
        'noAnswerPoints' => 'integer',
        'options' => 'array',
        'question' => 'string',
        'requiredFlag' => 'boolean',
        'sequenceNumber' => 'integer',
        'surveyId' => 'integer',
        'type' => 'string'
    ];
}
