<?php

namespace Spinen\ConnectWise\Models\v2018_5\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SurveyResult Version v2018_5
 *
 * Model for SurveyResult
 *
 * @property CompanyReference $company
 * @property ContactReference $contact
 * @property Metadata $_info
 * @property array $results
 * @property bool $contactMeFlag
 * @property int $id
 * @property int $surveyId
 * @property int $ticketId
 * @property int $totalPoints
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
        '_info' => Metadata::class,
        'company' => CompanyReference::class,
        'contact' => ContactReference::class,
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
