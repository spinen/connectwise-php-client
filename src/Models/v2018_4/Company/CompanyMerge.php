<?php

namespace Spinen\ConnectWise\Models\v2018_4\Company;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanyMerge Version v2018_4
 *
 * Model for CompanyMerge
 *
 * @property integer $toCompanyId
 * @property string $accountNumber
 * @property string $activities
 * @property string $billingAddress
 * @property string $billingContact
 * @property string $billingTerms
 * @property string $contacts
 * @property string $dateAcquired
 * @property string $documents
 * @property string $fax
 * @property string $identifier
 * @property string $market
 * @property string $name
 * @property string $notes
 * @property string $numberOfEmployees
 * @property string $opportunities
 * @property string $phone
 * @property string $primaryAddress
 * @property string $primaryContact
 * @property string $projects
 * @property string $revenue
 * @property string $revenueYear
 * @property string $services
 * @property string $sicCode
 * @property string $sites
 * @property string $sourceList
 * @property string $status
 * @property string $taxCode
 * @property string $territory
 * @property string $timeZone
 * @property string $type
 * @property string $userDefinedField1
 * @property string $userDefinedField10
 * @property string $userDefinedField2
 * @property string $userDefinedField3
 * @property string $userDefinedField4
 * @property string $userDefinedField5
 * @property string $userDefinedField6
 * @property string $userDefinedField7
 * @property string $userDefinedField8
 * @property string $userDefinedField9
 * @property string $website
 */
class CompanyMerge extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'accountNumber' => 'string',
        'activities' => 'string',
        'billingAddress' => 'string',
        'billingContact' => 'string',
        'billingTerms' => 'string',
        'contacts' => 'string',
        'dateAcquired' => 'string',
        'documents' => 'string',
        'fax' => 'string',
        'identifier' => 'string',
        'market' => 'string',
        'name' => 'string',
        'notes' => 'string',
        'numberOfEmployees' => 'string',
        'opportunities' => 'string',
        'phone' => 'string',
        'primaryAddress' => 'string',
        'primaryContact' => 'string',
        'projects' => 'string',
        'revenue' => 'string',
        'revenueYear' => 'string',
        'services' => 'string',
        'sicCode' => 'string',
        'sites' => 'string',
        'sourceList' => 'string',
        'status' => 'string',
        'taxCode' => 'string',
        'territory' => 'string',
        'timeZone' => 'string',
        'toCompanyId' => 'integer',
        'type' => 'string',
        'userDefinedField1' => 'string',
        'userDefinedField10' => 'string',
        'userDefinedField2' => 'string',
        'userDefinedField3' => 'string',
        'userDefinedField4' => 'string',
        'userDefinedField5' => 'string',
        'userDefinedField6' => 'string',
        'userDefinedField7' => 'string',
        'userDefinedField8' => 'string',
        'userDefinedField9' => 'string',
        'website' => 'string'
    ];
}
