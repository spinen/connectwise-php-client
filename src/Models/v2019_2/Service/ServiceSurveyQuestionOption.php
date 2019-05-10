<?php

namespace Spinen\ConnectWise\Models\v2019_2\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceSurveyQuestionOption Version v2019_2
 *
 * Model for ServiceSurveyQuestionOption
 *
 * @property boolean $includeFlag
 * @property string $caption
 * @property integer $points
 */
class ServiceSurveyQuestionOption extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'includeFlag' => 'boolean',
        'caption' => 'string',
        'points' => 'integer',
    ];
}
