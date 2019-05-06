<?php

namespace Spinen\ConnectWise\Models\v2019_2\Service;

use Spinen\ConnectWise\Support\Model;

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
