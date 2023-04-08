<?php

namespace Spinen\ConnectWise\Models\v2018_5\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceSurveyQuestionOption Version v2018_5
 *
 * Model for ServiceSurveyQuestionOption
 *
 * @property bool $includeFlag
 * @property int $points
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
        'points' => 'integer',
    ];
}
