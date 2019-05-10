<?php

namespace Spinen\ConnectWise\Models\v2019_2\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SurveyResult Version v2019_2
 *
 * Model for SurveyResult
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Service\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_2\Service\ContactReference $contact
 * @property Spinen\ConnectWise\Models\v2019_2\Service\Metadata $_info
 * @property array $results
 * @property boolean $contactMeFlag
 * @property integer $id
 * @property integer $surveyId
 * @property integer $ticketId
 * @property integer $totalPoints
 * @property string $emailAddress
 * @property string $footerResponse
 */
class SurveyResult extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Service\Metadata',
        'company' => 'Spinen\ConnectWise\Models\v2019_2\Service\CompanyReference',
        'contact' => 'Spinen\ConnectWise\Models\v2019_2\Service\ContactReference',
        'contactMeFlag' => 'boolean',
        'emailAddress' => 'string',
        'footerResponse' => 'string',
        'id' => 'integer',
        'results' => 'array',
        'surveyId' => 'integer',
        'ticketId' => 'integer',
        'totalPoints' => 'integer',
    ];
}
