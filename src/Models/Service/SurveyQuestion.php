<?php

namespace Spinen\ConnectWise\Models\Service;

use Spinen\ConnectWise\Support\Model;

class SurveyQuestion extends Model
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
