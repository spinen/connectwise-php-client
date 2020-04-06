<?php

namespace Spinen\ConnectWise\Models\v2019_5\Service;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceSurveyQuestionOption Version v2019_5
 *
 * Model for ServiceSurveyQuestionOption
 *
 * @property boolean $includeFlag
 * @property integer $points
 * @property string $caption
 */
class ServiceSurveyQuestionOption extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'caption' => 'string',
        'includeFlag' => 'boolean',
        'points' => 'integer'
    ];
}
