<?php

namespace Spinen\ConnectWise\Models\v2019_3\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Ticket Version v2019_3
 *
 * Model for Ticket
 *
 * @property integer $id
 * @property string $summary
 * @property boolean $isIssueFlag
 * @property Spinen\ConnectWise\Models\v2019_3\Project\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2019_3\Project\ServiceStatusReference $status
 * @property Spinen\ConnectWise\Models\v2019_3\Project\ProjectReference $project
 * @property Spinen\ConnectWise\Models\v2019_3\Project\ProjectPhaseReference $phase
 * @property string $wbsCode
 * @property Spinen\ConnectWise\Models\v2019_3\Project\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_3\Project\SiteReference $site
 * @property string $siteName
 * @property string $addressLine1
 * @property string $addressLine2
 * @property string $city
 * @property string $stateIdentifier
 * @property string $zip
 * @property Spinen\ConnectWise\Models\v2019_3\Project\CountryReference $country
 * @property Spinen\ConnectWise\Models\v2019_3\Project\ContactReference $contact
 * @property string $contactName
 * @property string $contactPhoneNumber
 * @property string $contactPhoneExtension
 * @property string $contactEmailAddress
 * @property Spinen\ConnectWise\Models\v2019_3\Project\ServiceTypeReference $type
 * @property Spinen\ConnectWise\Models\v2019_3\Project\ServiceSubTypeReference $subType
 * @property Spinen\ConnectWise\Models\v2019_3\Project\ServiceItemReference $item
 * @property Spinen\ConnectWise\Models\v2019_3\Project\MemberReference $owner
 * @property Spinen\ConnectWise\Models\v2019_3\Project\PriorityReference $priority
 * @property Spinen\ConnectWise\Models\v2019_3\Project\ServiceLocationReference $serviceLocation
 * @property Spinen\ConnectWise\Models\v2019_3\Project\ServiceSourceReference $source
 * @property Carbon\Carbon $requiredDate
 * @property float $budgetHours
 * @property Spinen\ConnectWise\Models\v2019_3\Project\OpportunityReference $opportunity
 * @property Spinen\ConnectWise\Models\v2019_3\Project\AgreementReference $agreement
 * @property integer $knowledgeBaseCategoryId
 * @property integer $knowledgeBaseSubCategoryId
 * @property integer $knowledgeBaseLinkId
 * @property string $knowledgeBaseLinkType
 * @property boolean $allowAllClientsPortalView
 * @property boolean $customerUpdatedFlag
 * @property boolean $automaticEmailContactFlag
 * @property boolean $automaticEmailResourceFlag
 * @property boolean $automaticEmailCcFlag
 * @property string $automaticEmailCc
 * @property string $closedDate
 * @property string $closedBy
 * @property boolean $closedFlag
 * @property float $actualHours
 * @property boolean $approved
 * @property string $subBillingMethod
 * @property float $subBillingAmount
 * @property string $subDateAccepted
 * @property string $resources
 * @property string $billTime
 * @property string $billExpenses
 * @property string $billProducts
 * @property string $predecessorType
 * @property integer $predecessorId
 * @property boolean $predecessorClosedFlag
 * @property integer $lagDays
 * @property boolean $lagNonworkingDaysFlag
 * @property Carbon\Carbon $estimatedStartDate
 * @property Spinen\ConnectWise\Models\v2019_3\Project\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2019_3\Project\SystemDepartmentReference $department
 * @property integer $duration
 * @property Spinen\ConnectWise\Models\v2019_3\Project\Guid $mobileGuid
 * @property Spinen\ConnectWise\Models\v2019_3\Project\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2019_3\Project\Metadata $_info
 * @property string $initialDescription
 * @property string $initialInternalAnalysis
 * @property string $initialResolution
 * @property string $contactEmailLookup
 * @property boolean $processNotifications
 * @property boolean $skipCallback
 * @property array $customFields
 */
class Ticket extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'summary' => 'string',
        'isIssueFlag' => 'boolean',
        'board' => 'Spinen\ConnectWise\Models\v2019_3\Project\BoardReference',
        'status' => 'Spinen\ConnectWise\Models\v2019_3\Project\ServiceStatusReference',
        'project' => 'Spinen\ConnectWise\Models\v2019_3\Project\ProjectReference',
        'phase' => 'Spinen\ConnectWise\Models\v2019_3\Project\ProjectPhaseReference',
        'wbsCode' => 'string',
        'company' => 'Spinen\ConnectWise\Models\v2019_3\Project\CompanyReference',
        'site' => 'Spinen\ConnectWise\Models\v2019_3\Project\SiteReference',
        'siteName' => 'string',
        'addressLine1' => 'string',
        'addressLine2' => 'string',
        'city' => 'string',
        'stateIdentifier' => 'string',
        'zip' => 'string',
        'country' => 'Spinen\ConnectWise\Models\v2019_3\Project\CountryReference',
        'contact' => 'Spinen\ConnectWise\Models\v2019_3\Project\ContactReference',
        'contactName' => 'string',
        'contactPhoneNumber' => 'string',
        'contactPhoneExtension' => 'string',
        'contactEmailAddress' => 'string',
        'type' => 'Spinen\ConnectWise\Models\v2019_3\Project\ServiceTypeReference',
        'subType' => 'Spinen\ConnectWise\Models\v2019_3\Project\ServiceSubTypeReference',
        'item' => 'Spinen\ConnectWise\Models\v2019_3\Project\ServiceItemReference',
        'owner' => 'Spinen\ConnectWise\Models\v2019_3\Project\MemberReference',
        'priority' => 'Spinen\ConnectWise\Models\v2019_3\Project\PriorityReference',
        'serviceLocation' => 'Spinen\ConnectWise\Models\v2019_3\Project\ServiceLocationReference',
        'source' => 'Spinen\ConnectWise\Models\v2019_3\Project\ServiceSourceReference',
        'requiredDate' => 'Carbon\Carbon',
        'budgetHours' => 'float',
        'opportunity' => 'Spinen\ConnectWise\Models\v2019_3\Project\OpportunityReference',
        'agreement' => 'Spinen\ConnectWise\Models\v2019_3\Project\AgreementReference',
        'knowledgeBaseCategoryId' => 'integer',
        'knowledgeBaseSubCategoryId' => 'integer',
        'knowledgeBaseLinkId' => 'integer',
        'knowledgeBaseLinkType' => 'string',
        'allowAllClientsPortalView' => 'boolean',
        'customerUpdatedFlag' => 'boolean',
        'automaticEmailContactFlag' => 'boolean',
        'automaticEmailResourceFlag' => 'boolean',
        'automaticEmailCcFlag' => 'boolean',
        'automaticEmailCc' => 'string',
        'closedDate' => 'string',
        'closedBy' => 'string',
        'closedFlag' => 'boolean',
        'actualHours' => 'float',
        'approved' => 'boolean',
        'subBillingMethod' => 'string',
        'subBillingAmount' => 'float',
        'subDateAccepted' => 'string',
        'resources' => 'string',
        'billTime' => 'string',
        'billExpenses' => 'string',
        'billProducts' => 'string',
        'predecessorType' => 'string',
        'predecessorId' => 'integer',
        'predecessorClosedFlag' => 'boolean',
        'lagDays' => 'integer',
        'lagNonworkingDaysFlag' => 'boolean',
        'estimatedStartDate' => 'Carbon\Carbon',
        'location' => 'Spinen\ConnectWise\Models\v2019_3\Project\SystemLocationReference',
        'department' => 'Spinen\ConnectWise\Models\v2019_3\Project\SystemDepartmentReference',
        'duration' => 'integer',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2019_3\Project\Guid',
        'currency' => 'Spinen\ConnectWise\Models\v2019_3\Project\CurrencyReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Project\Metadata',
        'initialDescription' => 'string',
        'initialInternalAnalysis' => 'string',
        'initialResolution' => 'string',
        'contactEmailLookup' => 'string',
        'processNotifications' => 'boolean',
        'skipCallback' => 'boolean',
        'customFields' => 'array',
    ];
}
