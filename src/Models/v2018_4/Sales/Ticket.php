<?php

namespace Spinen\ConnectWise\Models\v2018_4\Sales;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class Ticket Version v2018_4
 *
 * Model for Ticket
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
 * @property SLAReference $sla
 * @property ServiceItemReference $item
 * @property ServiceLocationReference $serviceLocation
 * @property ServiceSourceReference $source
 * @property ServiceStatusReference $status
 * @property ServiceSubTypeReference $subType
 * @property ServiceTeamReference $team
 * @property ServiceTypeReference $type
 * @property SiteReference $site
 * @property array $customFields
 * @property bool $allowAllClientsPortalView
 * @property bool $approved
 * @property bool $automaticEmailCcFlag
 * @property bool $automaticEmailContactFlag
 * @property bool $automaticEmailResourceFlag
 * @property bool $closedFlag
 * @property bool $customerUpdatedFlag
 * @property bool $hasChildTicket
 * @property bool $isInSla
 * @property bool $lagNonworkingDaysFlag
 * @property bool $predecessorClosedFlag
 * @property bool $processNotifications
 * @property bool $skipCallback
 * @property float $actualHours
 * @property float $billingAmount
 * @property float $budgetHours
 * @property float $estimatedExpenseCost
 * @property float $estimatedExpenseRevenue
 * @property float $estimatedProductCost
 * @property float $estimatedProductRevenue
 * @property float $estimatedTimeCost
 * @property float $estimatedTimeRevenue
 * @property float $hourlyRate
 * @property float $subBillingAmount
 * @property int $businessUnitId
 * @property int $duration
 * @property int $id
 * @property int $knowledgeBaseCategoryId
 * @property int $knowledgeBaseLinkId
 * @property int $knowledgeBaseSubCategoryId
 * @property int $lagDays
 * @property int $locationId
 * @property int $parentTicketId
 * @property int $predecessorId
 * @property int $resPlanMinutes
 * @property int $resolveMinutes
 * @property int $respondMinutes
 * @property string $addressLine1
 * @property string $addressLine2
 * @property string $automaticEmailCc
 * @property string $billExpenses
 * @property string $billProducts
 * @property string $billTime
 * @property string $billingMethod
 * @property string $city
 * @property string $closedBy
 * @property string $closedDate
 * @property string $contactEmailAddress
 * @property string $contactEmailLookup
 * @property string $contactName
 * @property string $contactPhoneExtension
 * @property string $contactPhoneNumber
 * @property string $dateEntered
 * @property string $dateResolved
 * @property string $dateResplan
 * @property string $dateResponded
 * @property string $enteredBy
 * @property string $externalXRef
 * @property string $impact
 * @property string $initialDescription
 * @property string $initialInternalAnalysis
 * @property string $initialResolution
 * @property string $knowledgeBaseLinkType
 * @property string $poNumber
 * @property string $predecessorType
 * @property string $recordType
 * @property string $resources
 * @property string $severity
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
        'billingAmount' => 'float',
        'billingMethod' => 'string',
        'board' => BoardReference::class,
        'budgetHours' => 'float',
        'businessUnitId' => 'integer',
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
        'dateEntered' => 'string',
        'dateResolved' => 'string',
        'dateResplan' => 'string',
        'dateResponded' => 'string',
        'duration' => 'integer',
        'enteredBy' => 'string',
        'estimatedExpenseCost' => 'float',
        'estimatedExpenseRevenue' => 'float',
        'estimatedProductCost' => 'float',
        'estimatedProductRevenue' => 'float',
        'estimatedStartDate' => Carbon::class,
        'estimatedTimeCost' => 'float',
        'estimatedTimeRevenue' => 'float',
        'externalXRef' => 'string',
        'hasChildTicket' => 'boolean',
        'hourlyRate' => 'float',
        'id' => 'integer',
        'impact' => 'string',
        'initialDescription' => 'string',
        'initialInternalAnalysis' => 'string',
        'initialResolution' => 'string',
        'isInSla' => 'boolean',
        'item' => ServiceItemReference::class,
        'knowledgeBaseCategoryId' => 'integer',
        'knowledgeBaseLinkId' => 'integer',
        'knowledgeBaseLinkType' => 'string',
        'knowledgeBaseSubCategoryId' => 'integer',
        'lagDays' => 'integer',
        'lagNonworkingDaysFlag' => 'boolean',
        'locationId' => 'integer',
        'mobileGuid' => Guid::class,
        'opportunity' => OpportunityReference::class,
        'owner' => MemberReference::class,
        'parentTicketId' => 'integer',
        'phase' => ProjectPhaseReference::class,
        'poNumber' => 'string',
        'predecessorClosedFlag' => 'boolean',
        'predecessorId' => 'integer',
        'predecessorType' => 'string',
        'priority' => PriorityReference::class,
        'processNotifications' => 'boolean',
        'project' => ProjectReference::class,
        'recordType' => 'string',
        'requiredDate' => Carbon::class,
        'resPlanMinutes' => 'integer',
        'resolveMinutes' => 'integer',
        'resources' => 'string',
        'respondMinutes' => 'integer',
        'serviceLocation' => ServiceLocationReference::class,
        'severity' => 'string',
        'site' => SiteReference::class,
        'siteName' => 'string',
        'skipCallback' => 'boolean',
        'sla' => SLAReference::class,
        'source' => ServiceSourceReference::class,
        'stateIdentifier' => 'string',
        'status' => ServiceStatusReference::class,
        'subBillingAmount' => 'float',
        'subBillingMethod' => 'string',
        'subDateAccepted' => 'string',
        'subType' => ServiceSubTypeReference::class,
        'summary' => 'string',
        'team' => ServiceTeamReference::class,
        'type' => ServiceTypeReference::class,
        'wbsCode' => 'string',
        'zip' => 'string',
    ];
}
