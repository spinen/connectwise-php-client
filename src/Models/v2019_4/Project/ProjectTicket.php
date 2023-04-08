<?php

namespace Spinen\ConnectWise\Models\v2019_4\Project;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectTicket Version v2019_4
 *
 * Model for ProjectTicket
 *
 * @property AgreementReference $agreement
 * @property BoardReference $board
 * @property Carbon $estimatedStartDate
 * @property Carbon $requiredDate
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
 * @property bool $allowAllClientsPortalView
 * @property bool $approved
 * @property bool $automaticEmailCcFlag
 * @property bool $automaticEmailContactFlag
 * @property bool $automaticEmailResourceFlag
 * @property bool $closedFlag
 * @property bool $customerUpdatedFlag
 * @property bool $isIssueFlag
 * @property bool $lagNonworkingDaysFlag
 * @property bool $predecessorClosedFlag
 * @property bool $processNotifications
 * @property bool $skipCallback
 * @property float $actualHours
 * @property float $budgetHours
 * @property float $subBillingAmount
 * @property int $duration
 * @property int $id
 * @property int $knowledgeBaseCategoryId
 * @property int $knowledgeBaseLinkId
 * @property int $knowledgeBaseSubCategoryId
 * @property int $lagDays
 * @property int $predecessorId
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
class ProjectTicket extends Model
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
        'estimatedStartDate' => Carbon::class,
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
        'requiredDate' => Carbon::class,
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
