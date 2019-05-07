<?php

namespace Spinen\ConnectWise\Models\v2018_4\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SurveyResult
 *
 * @property integer $id
 * @property integer $ticketId
 * @property string $emailAddress
 * @property string $footerResponse
 * @property boolean $contactMeFlag
 * @property array $results
 * @property integer $totalPoints
 * @property integer $surveyId
 */
class SurveyResult extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'ticketId' => 'integer',
        'emailAddress' => 'string',
        'footerResponse' => 'string',
        'contactMeFlag' => 'boolean',
        'results' => 'array',
        'totalPoints' => 'integer',
        'surveyId' => 'integer',
    ];
}
