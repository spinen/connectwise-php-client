<?php

namespace Spinen\ConnectWise\Models\v2018_4\Service;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class SurveyResultDetail Version v2018_4
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
        'answer' => 'string',
        'questionId' => 'integer'
    ];
}
