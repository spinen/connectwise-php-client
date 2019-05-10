<?php

namespace Spinen\ConnectWise\Models\v2018_6\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Ticket Version v2018_6
 *
 * Model for Ticket
 *
 * @property AgreementReference $agreement
 * @property BoardReference $board
 * @property Carbon\Carbon $estimatedStartDate
 * @property Carbon\Carbon $requiredDate
 * @property CompanyReference $company
 * @property ContactReference $contact
 * @property CountryReference $country
 * @property CurrencyReference $currency
 * @property Guid $mobileGuid
 * @property MemberReference $owner
 * @property Metadata $_info
 * @property OpportunityReference $opportunity
 * @property PriorityReference $priority
 * @property ProjectPhaseReference $phase
 * @property ProjectReference $project
 * @property ServiceItemReference $item
 * @property ServiceLocationReference $serviceLocation
 * @property ServiceSourceReference $source
 * @property ServiceStatusReference $status
 * @property ServiceSubTypeReference $subType
 * @property ServiceTypeReference $type
 * @property SiteReference $site
 * @property SystemDepartmentReference $department
 * @property SystemLocationReference $location
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
        '_info' => Metadata::class,
        'actualHours' => 'float',
        'addressLine1' => 'string',
        'addressLine2' => 'string',
        'agreement' => AgreementReference::class,
        'allowAllClientsPortalView' => 'boolean',
        'approved' => 'boolean',
        'automaticEmailCc' => 'string',
        'automaticEmailCcFlag' => 'boolean',
        'automaticEmailContactFlag' => 'boolean',
        'automaticEmailResourceFlag' => 'boolean',
        'billExpenses' => 'string',
        'billProducts' => 'string',
        'billTime' => 'string',
        'board' => BoardReference::class,
        'budgetHours' => 'float',
        'city' => 'string',
        'closedBy' => 'string',
        'closedDate' => 'string',
        'closedFlag' => 'boolean',
        'company' => CompanyReference::class,
        'contact' => ContactReference::class,
        'contactEmailAddress' => 'string',
        'contactEmailLookup' => 'string',
        'contactName' => 'string',
        'contactPhoneExtension' => 'string',
        'contactPhoneNumber' => 'string',
        'country' => CountryReference::class,
        'currency' => CurrencyReference::class,
        'customFields' => 'array',
        'customerUpdatedFlag' => 'boolean',
        'department' => SystemDepartmentReference::class,
        'duration' => 'integer',
        'estimatedStartDate' => Carbon\Carbon::class,
        'id' => 'integer',
        'initialDescription' => 'string',
        'initialInternalAnalysis' => 'string',
        'initialResolution' => 'string',
        'isIssueFlag' => 'boolean',
        'item' => ServiceItemReference::class,
        'knowledgeBaseCategoryId' => 'integer',
        'knowledgeBaseLinkId' => 'integer',
        'knowledgeBaseLinkType' => 'string',
        'knowledgeBaseSubCategoryId' => 'integer',
        'lagDays' => 'integer',
        'lagNonworkingDaysFlag' => 'boolean',
        'location' => SystemLocationReference::class,
        'mobileGuid' => Guid::class,
        'opportunity' => OpportunityReference::class,
        'owner' => MemberReference::class,
        'phase' => ProjectPhaseReference::class,
        'predecessorClosedFlag' => 'boolean',
        'predecessorId' => 'integer',
        'predecessorType' => 'string',
        'priority' => PriorityReference::class,
        'processNotifications' => 'boolean',
        'project' => ProjectReference::class,
        'requiredDate' => Carbon\Carbon::class,
        'resources' => 'string',
        'serviceLocation' => ServiceLocationReference::class,
        'site' => SiteReference::class,
        'siteName' => 'string',
        'skipCallback' => 'boolean',
        'source' => ServiceSourceReference::class,
        'stateIdentifier' => 'string',
        'status' => ServiceStatusReference::class,
        'subBillingAmount' => 'float',
        'subBillingMethod' => 'string',
        'subDateAccepted' => 'string',
        'subType' => ServiceSubTypeReference::class,
        'summary' => 'string',
        'type' => ServiceTypeReference::class,
        'wbsCode' => 'string',
        'zip' => 'string',
    ];
}
