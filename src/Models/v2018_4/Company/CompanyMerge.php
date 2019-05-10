<?php

namespace Spinen\ConnectWise\Models\v2018_4\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanyMerge Version v2018_4
 *
 * Model for CompanyMerge
 *
 * @property integer $toCompanyId
 * @property string $name
 * @property string $identifier
 * @property string $status
 * @property string $type
 * @property string $primaryAddress
 * @property string $primaryContact
 * @property string $phone
 * @property string $fax
 * @property string $website
 * @property string $market
 * @property string $territory
 * @property string $revenue
 * @property string $revenueYear
 * @property string $numberOfEmployees
 * @property string $sicCode
 * @property string $dateAcquired
 * @property string $timeZone
 * @property string $sourceList
 * @property string $userDefinedField1
 * @property string $userDefinedField2
 * @property string $userDefinedField3
 * @property string $userDefinedField4
 * @property string $userDefinedField5
 * @property string $userDefinedField6
 * @property string $userDefinedField7
 * @property string $userDefinedField8
 * @property string $userDefinedField9
 * @property string $userDefinedField10
 * @property string $billingAddress
 * @property string $billingContact
 * @property string $taxCode
 * @property string $accountNumber
 * @property string $billingTerms
 * @property string $notes
 * @property string $sites
 * @property string $activities
 * @property string $opportunities
 * @property string $services
 * @property string $projects
 * @property string $contacts
 * @property string $documents
 */
class CompanyMerge extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'toCompanyId' => 'integer',
        'name' => 'string',
        'identifier' => 'string',
        'status' => 'string',
        'type' => 'string',
        'primaryAddress' => 'string',
        'primaryContact' => 'string',
        'phone' => 'string',
        'fax' => 'string',
        'website' => 'string',
        'market' => 'string',
        'territory' => 'string',
        'revenue' => 'string',
        'revenueYear' => 'string',
        'numberOfEmployees' => 'string',
        'sicCode' => 'string',
        'dateAcquired' => 'string',
        'timeZone' => 'string',
        'sourceList' => 'string',
        'userDefinedField1' => 'string',
        'userDefinedField2' => 'string',
        'userDefinedField3' => 'string',
        'userDefinedField4' => 'string',
        'userDefinedField5' => 'string',
        'userDefinedField6' => 'string',
        'userDefinedField7' => 'string',
        'userDefinedField8' => 'string',
        'userDefinedField9' => 'string',
        'userDefinedField10' => 'string',
        'billingAddress' => 'string',
        'billingContact' => 'string',
        'taxCode' => 'string',
        'accountNumber' => 'string',
        'billingTerms' => 'string',
        'notes' => 'string',
        'sites' => 'string',
        'activities' => 'string',
        'opportunities' => 'string',
        'services' => 'string',
        'projects' => 'string',
        'contacts' => 'string',
        'documents' => 'string',
    ];
}
