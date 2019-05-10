<?php

namespace Spinen\ConnectWise\Models\v2018_5\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Ticket Version v2018_5
 * 
 * Model for Ticket
 *
 * @property integer $id
 * @property string $summary
 * @property string $recordType
 * @property Spinen\ConnectWise\Models\v2018_5\Service\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2018_5\Service\ServiceStatusReference $status
 * @property Spinen\ConnectWise\Models\v2018_5\Service\ProjectReference $project
 * @property Spinen\ConnectWise\Models\v2018_5\Service\ProjectPhaseReference $phase
 * @property string $wbsCode
 * @property Spinen\ConnectWise\Models\v2018_5\Service\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2018_5\Service\SiteReference $site
 * @property string $siteName
 * @property string $addressLine1
 * @property string $addressLine2
 * @property string $city
 * @property string $stateIdentifier
 * @property string $zip
 * @property Spinen\ConnectWise\Models\v2018_5\Service\CountryReference $country
 * @property Spinen\ConnectWise\Models\v2018_5\Service\ContactReference $contact
 * @property string $contactName
 * @property string $contactPhoneNumber
 * @property string $contactPhoneExtension
 * @property string $contactEmailAddress
 * @property Spinen\ConnectWise\Models\v2018_5\Service\ServiceTypeReference $type
 * @property Spinen\ConnectWise\Models\v2018_5\Service\ServiceSubTypeReference $subType
 * @property Spinen\ConnectWise\Models\v2018_5\Service\ServiceItemReference $item
 * @property Spinen\ConnectWise\Models\v2018_5\Service\ServiceTeamReference $team
 * @property Spinen\ConnectWise\Models\v2018_5\Service\MemberReference $owner
 * @property Spinen\ConnectWise\Models\v2018_5\Service\PriorityReference $priority
 * @property Spinen\ConnectWise\Models\v2018_5\Service\ServiceLocationReference $serviceLocation
 * @property Spinen\ConnectWise\Models\v2018_5\Service\ServiceSourceReference $source
 * @property Carbon\Carbon $requiredDate
 * @property float $budgetHours
 * @property Spinen\ConnectWise\Models\v2018_5\Service\OpportunityReference $opportunity
 * @property Spinen\ConnectWise\Models\v2018_5\Service\AgreementReference $agreement
 * @property string $severity
 * @property string $impact
 * @property string $externalXRef
 * @property string $poNumber
 * @property integer $knowledgeBaseCategoryId
 * @property integer $knowledgeBaseSubCategoryId
 * @property boolean $allowAllClientsPortalView
 * @property boolean $customerUpdatedFlag
 * @property boolean $automaticEmailContactFlag
 * @property boolean $automaticEmailResourceFlag
 * @property boolean $automaticEmailCcFlag
 * @property string $automaticEmailCc
 * @property string $initialDescription
 * @property string $initialInternalAnalysis
 * @property string $initialResolution
 * @property string $contactEmailLookup
 * @property boolean $processNotifications
 * @property boolean $skipCallback
 * @property string $closedDate
 * @property string $closedBy
 * @property boolean $closedFlag
 * @property string $dateEntered
 * @property string $enteredBy
 * @property float $actualHours
 * @property boolean $approved
 * @property float $estimatedExpenseCost
 * @property float $estimatedExpenseRevenue
 * @property float $estimatedProductCost
 * @property float $estimatedProductRevenue
 * @property float $estimatedTimeCost
 * @property float $estimatedTimeRevenue
 * @property string $billingMethod
 * @property float $billingAmount
 * @property float $hourlyRate
 * @property string $subBillingMethod
 * @property float $subBillingAmount
 * @property string $subDateAccepted
 * @property string $dateResolved
 * @property string $dateResplan
 * @property string $dateResponded
 * @property integer $resolveMinutes
 * @property integer $resPlanMinutes
 * @property integer $respondMinutes
 * @property boolean $isInSla
 * @property integer $knowledgeBaseLinkId
 * @property string $resources
 * @property integer $parentTicketId
 * @property boolean $hasChildTicket
 * @property boolean $hasMergedChildTicketFlag
 * @property string $knowledgeBaseLinkType
 * @property string $billTime
 * @property string $billExpenses
 * @property string $billProducts
 * @property string $predecessorType
 * @property integer $predecessorId
 * @property boolean $predecessorClosedFlag
 * @property integer $lagDays
 * @property boolean $lagNonworkingDaysFlag
 * @property Carbon\Carbon $estimatedStartDate
 * @property integer $duration
 * @property integer $locationId
 * @property integer $businessUnitId
 * @property Spinen\ConnectWise\Models\v2018_5\Service\Guid $mobileGuid
 * @property Spinen\ConnectWise\Models\v2018_5\Service\SLAReference $sla
 * @property Spinen\ConnectWise\Models\v2018_5\Service\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2018_5\Service\TicketReference $mergedParentTicket
 * @property Spinen\ConnectWise\Models\v2018_5\Service\Metadata $_info
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
        'recordType' => 'string',
        'board' => 'Spinen\ConnectWise\Models\v2018_5\Service\BoardReference',
        'status' => 'Spinen\ConnectWise\Models\v2018_5\Service\ServiceStatusReference',
        'project' => 'Spinen\ConnectWise\Models\v2018_5\Service\ProjectReference',
        'phase' => 'Spinen\ConnectWise\Models\v2018_5\Service\ProjectPhaseReference',
        'wbsCode' => 'string',
        'company' => 'Spinen\ConnectWise\Models\v2018_5\Service\CompanyReference',
        'site' => 'Spinen\ConnectWise\Models\v2018_5\Service\SiteReference',
        'siteName' => 'string',
        'addressLine1' => 'string',
        'addressLine2' => 'string',
        'city' => 'string',
        'stateIdentifier' => 'string',
        'zip' => 'string',
        'country' => 'Spinen\ConnectWise\Models\v2018_5\Service\CountryReference',
        'contact' => 'Spinen\ConnectWise\Models\v2018_5\Service\ContactReference',
        'contactName' => 'string',
        'contactPhoneNumber' => 'string',
        'contactPhoneExtension' => 'string',
        'contactEmailAddress' => 'string',
        'type' => 'Spinen\ConnectWise\Models\v2018_5\Service\ServiceTypeReference',
        'subType' => 'Spinen\ConnectWise\Models\v2018_5\Service\ServiceSubTypeReference',
        'item' => 'Spinen\ConnectWise\Models\v2018_5\Service\ServiceItemReference',
        'team' => 'Spinen\ConnectWise\Models\v2018_5\Service\ServiceTeamReference',
        'owner' => 'Spinen\ConnectWise\Models\v2018_5\Service\MemberReference',
        'priority' => 'Spinen\ConnectWise\Models\v2018_5\Service\PriorityReference',
        'serviceLocation' => 'Spinen\ConnectWise\Models\v2018_5\Service\ServiceLocationReference',
        'source' => 'Spinen\ConnectWise\Models\v2018_5\Service\ServiceSourceReference',
        'requiredDate' => 'Carbon\Carbon',
        'budgetHours' => 'float',
        'opportunity' => 'Spinen\ConnectWise\Models\v2018_5\Service\OpportunityReference',
        'agreement' => 'Spinen\ConnectWise\Models\v2018_5\Service\AgreementReference',
        'severity' => 'string',
        'impact' => 'string',
        'externalXRef' => 'string',
        'poNumber' => 'string',
        'knowledgeBaseCategoryId' => 'integer',
        'knowledgeBaseSubCategoryId' => 'integer',
        'allowAllClientsPortalView' => 'boolean',
        'customerUpdatedFlag' => 'boolean',
        'automaticEmailContactFlag' => 'boolean',
        'automaticEmailResourceFlag' => 'boolean',
        'automaticEmailCcFlag' => 'boolean',
        'automaticEmailCc' => 'string',
        'initialDescription' => 'string',
        'initialInternalAnalysis' => 'string',
        'initialResolution' => 'string',
        'contactEmailLookup' => 'string',
        'processNotifications' => 'boolean',
        'skipCallback' => 'boolean',
        'closedDate' => 'string',
        'closedBy' => 'string',
        'closedFlag' => 'boolean',
        'dateEntered' => 'string',
        'enteredBy' => 'string',
        'actualHours' => 'float',
        'approved' => 'boolean',
        'estimatedExpenseCost' => 'float',
        'estimatedExpenseRevenue' => 'float',
        'estimatedProductCost' => 'float',
        'estimatedProductRevenue' => 'float',
        'estimatedTimeCost' => 'float',
        'estimatedTimeRevenue' => 'float',
        'billingMethod' => 'string',
        'billingAmount' => 'float',
        'hourlyRate' => 'float',
        'subBillingMethod' => 'string',
        'subBillingAmount' => 'float',
        'subDateAccepted' => 'string',
        'dateResolved' => 'string',
        'dateResplan' => 'string',
        'dateResponded' => 'string',
        'resolveMinutes' => 'integer',
        'resPlanMinutes' => 'integer',
        'respondMinutes' => 'integer',
        'isInSla' => 'boolean',
        'knowledgeBaseLinkId' => 'integer',
        'resources' => 'string',
        'parentTicketId' => 'integer',
        'hasChildTicket' => 'boolean',
        'hasMergedChildTicketFlag' => 'boolean',
        'knowledgeBaseLinkType' => 'string',
        'billTime' => 'string',
        'billExpenses' => 'string',
        'billProducts' => 'string',
        'predecessorType' => 'string',
        'predecessorId' => 'integer',
        'predecessorClosedFlag' => 'boolean',
        'lagDays' => 'integer',
        'lagNonworkingDaysFlag' => 'boolean',
        'estimatedStartDate' => 'Carbon\Carbon',
        'duration' => 'integer',
        'locationId' => 'integer',
        'businessUnitId' => 'integer',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2018_5\Service\Guid',
        'sla' => 'Spinen\ConnectWise\Models\v2018_5\Service\SLAReference',
        'currency' => 'Spinen\ConnectWise\Models\v2018_5\Service\CurrencyReference',
        'mergedParentTicket' => 'Spinen\ConnectWise\Models\v2018_5\Service\TicketReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Service\Metadata',
        'customFields' => 'array',
    ];
}
