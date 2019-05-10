<?php

namespace Spinen\ConnectWise\Models\v2018_6\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SurveyResult Version v2018_6
 *
 * Model for SurveyResult
 *
 * @property integer $id
 * @property integer $ticketId
 * @property string $emailAddress
 * @property string $footerResponse
 * @property boolean $contactMeFlag
 * @property Spinen\ConnectWise\Models\v2018_6\Service\ContactReference $contact
 * @property array $results
 * @property integer $totalPoints
 * @property Spinen\ConnectWise\Models\v2018_6\Service\CompanyReference $company
 * @property integer $surveyId
 * @property Spinen\ConnectWise\Models\v2018_6\Service\Metadata $_info
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
        'contact' => 'Spinen\ConnectWise\Models\v2018_6\Service\ContactReference',
        'results' => 'array',
        'totalPoints' => 'integer',
        'company' => 'Spinen\ConnectWise\Models\v2018_6\Service\CompanyReference',
        'surveyId' => 'integer',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Service\Metadata',
    ];
}
