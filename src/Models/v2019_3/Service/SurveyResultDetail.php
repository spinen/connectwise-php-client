<?php

namespace Spinen\ConnectWise\Models\v2019_3\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SurveyResultDetail Version v2019_3
 *
 * Model for SurveyResultDetail
 *
 * @property integer $questionId
 * @property string $answer
 */
class SurveyResultDetail extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'questionId' => 'integer',
        'answer' => 'string',
    ];
}
