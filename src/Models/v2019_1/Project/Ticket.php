<?php

namespace Spinen\ConnectWise\Models\v2019_1\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Ticket Version v2019_1
 *
 * Model for Ticket
 *
 * @property Carbon\Carbon $estimatedStartDate
 * @property Carbon\Carbon $requiredDate
 * @property Spinen\ConnectWise\Models\v2019_1\Project\AgreementReference $agreement
 * @property Spinen\ConnectWise\Models\v2019_1\Project\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2019_1\Project\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_1\Project\ContactReference $contact
 * @property Spinen\ConnectWise\Models\v2019_1\Project\CountryReference $country
 * @property Spinen\ConnectWise\Models\v2019_1\Project\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2019_1\Project\Guid $mobileGuid
 * @property Spinen\ConnectWise\Models\v2019_1\Project\MemberReference $owner
 * @property Spinen\ConnectWise\Models\v2019_1\Project\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_1\Project\OpportunityReference $opportunity
 * @property Spinen\ConnectWise\Models\v2019_1\Project\PriorityReference $priority
 * @property Spinen\ConnectWise\Models\v2019_1\Project\ProjectPhaseReference $phase
 * @property Spinen\ConnectWise\Models\v2019_1\Project\ProjectReference $project
 * @property Spinen\ConnectWise\Models\v2019_1\Project\ServiceItemReference $item
 * @property Spinen\ConnectWise\Models\v2019_1\Project\ServiceLocationReference $serviceLocation
 * @property Spinen\ConnectWise\Models\v2019_1\Project\ServiceSourceReference $source
 * @property Spinen\ConnectWise\Models\v2019_1\Project\ServiceStatusReference $status
 * @property Spinen\ConnectWise\Models\v2019_1\Project\ServiceSubTypeReference $subType
 * @property Spinen\ConnectWise\Models\v2019_1\Project\ServiceTypeReference $type
 * @property Spinen\ConnectWise\Models\v2019_1\Project\SiteReference $site
 * @property Spinen\ConnectWise\Models\v2019_1\Project\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2019_1\Project\SystemLocationReference $location
 * @property array $customFields
 * @property boolean $allowAllClientsPortalView
 * @property boolean $approved
 * @property boolean $automaticEmailCcFlag
 * @property boolean $automaticEmailContactFlag
 * @property boolean $automaticEmailResourceFlag
 * @property boolean $closedFlag
 * @property boolean $customerUpdatedFlag
 * @property boolean $isIssueFlag
 * @property boolean $lagNonworkingDaysFlag
 * @property boolean $predecessorClosedFlag
 * @property boolean $processNotifications
 * @property boolean $skipCallback
 * @property float $actualHours
 * @property float $budgetHours
 * @property float $subBillingAmount
 * @property integer $duration
 * @property integer $id
 * @property integer $knowledgeBaseCategoryId
 * @property integer $knowledgeBaseLinkId
 * @property integer $knowledgeBaseSubCategoryId
 * @property integer $lagDays
 * @property integer $predecessorId
 * @property string $addressLine1
 * @property string $addressLine2
 * @property string $automaticEmailCc
 * @property string $billExpenses
 * @property string $billProducts
 * @property string $billTime
 * @property string $city
 * @property string $closedBy
 * @property string $closedDate
 * @property string $contactEmailAddress
 * @property string $contactEmailLookup
 * @property string $contactName
 * @property string $contactPhoneExtension
 * @property string $contactPhoneNumber
 * @property string $initialDescription
 * @property string $initialInternalAnalysis
 * @property string $initialResolution
 * @property string $knowledgeBaseLinkType
 * @property string $predecessorType
 * @property string $resources
 * @property string $siteName
 * @property string $stateIdentifier
 * @property string $subBillingMethod
 * @property string $subDateAccepted
 * @property string $summary
 * @property string $wbsCode
 * @property string $zip
 */
class Ticket extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Project\Metadata',
        'actualHours' => 'float',
        'addressLine1' => 'string',
        'addressLine2' => 'string',
        'agreement' => 'Spinen\ConnectWise\Models\v2019_1\Project\AgreementReference',
        'allowAllClientsPortalView' => 'boolean',
        'approved' => 'boolean',
        'automaticEmailCc' => 'string',
        'automaticEmailCcFlag' => 'boolean',
        'automaticEmailContactFlag' => 'boolean',
        'automaticEmailResourceFlag' => 'boolean',
        'billExpenses' => 'string',
        'billProducts' => 'string',
        'billTime' => 'string',
        'board' => 'Spinen\ConnectWise\Models\v2019_1\Project\BoardReference',
        'budgetHours' => 'float',
        'city' => 'string',
        'closedBy' => 'string',
        'closedDate' => 'string',
        'closedFlag' => 'boolean',
        'company' => 'Spinen\ConnectWise\Models\v2019_1\Project\CompanyReference',
        'contact' => 'Spinen\ConnectWise\Models\v2019_1\Project\ContactReference',
        'contactEmailAddress' => 'string',
        'contactEmailLookup' => 'string',
        'contactName' => 'string',
        'contactPhoneExtension' => 'string',
        'contactPhoneNumber' => 'string',
        'country' => 'Spinen\ConnectWise\Models\v2019_1\Project\CountryReference',
        'currency' => 'Spinen\ConnectWise\Models\v2019_1\Project\CurrencyReference',
        'customFields' => 'array',
        'customerUpdatedFlag' => 'boolean',
        'department' => 'Spinen\ConnectWise\Models\v2019_1\Project\SystemDepartmentReference',
        'duration' => 'integer',
        'estimatedStartDate' => 'Carbon\Carbon',
        'id' => 'integer',
        'initialDescription' => 'string',
        'initialInternalAnalysis' => 'string',
        'initialResolution' => 'string',
        'isIssueFlag' => 'boolean',
        'item' => 'Spinen\ConnectWise\Models\v2019_1\Project\ServiceItemReference',
        'knowledgeBaseCategoryId' => 'integer',
        'knowledgeBaseLinkId' => 'integer',
        'knowledgeBaseLinkType' => 'string',
        'knowledgeBaseSubCategoryId' => 'integer',
        'lagDays' => 'integer',
        'lagNonworkingDaysFlag' => 'boolean',
        'location' => 'Spinen\ConnectWise\Models\v2019_1\Project\SystemLocationReference',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2019_1\Project\Guid',
        'opportunity' => 'Spinen\ConnectWise\Models\v2019_1\Project\OpportunityReference',
        'owner' => 'Spinen\ConnectWise\Models\v2019_1\Project\MemberReference',
        'phase' => 'Spinen\ConnectWise\Models\v2019_1\Project\ProjectPhaseReference',
        'predecessorClosedFlag' => 'boolean',
        'predecessorId' => 'integer',
        'predecessorType' => 'string',
        'priority' => 'Spinen\ConnectWise\Models\v2019_1\Project\PriorityReference',
        'processNotifications' => 'boolean',
        'project' => 'Spinen\ConnectWise\Models\v2019_1\Project\ProjectReference',
        'requiredDate' => 'Carbon\Carbon',
        'resources' => 'string',
        'serviceLocation' => 'Spinen\ConnectWise\Models\v2019_1\Project\ServiceLocationReference',
        'site' => 'Spinen\ConnectWise\Models\v2019_1\Project\SiteReference',
        'siteName' => 'string',
        'skipCallback' => 'boolean',
        'source' => 'Spinen\ConnectWise\Models\v2019_1\Project\ServiceSourceReference',
        'stateIdentifier' => 'string',
        'status' => 'Spinen\ConnectWise\Models\v2019_1\Project\ServiceStatusReference',
        'subBillingAmount' => 'float',
        'subBillingMethod' => 'string',
        'subDateAccepted' => 'string',
        'subType' => 'Spinen\ConnectWise\Models\v2019_1\Project\ServiceSubTypeReference',
        'summary' => 'string',
        'type' => 'Spinen\ConnectWise\Models\v2019_1\Project\ServiceTypeReference',
        'wbsCode' => 'string',
        'zip' => 'string',
    ];
}
