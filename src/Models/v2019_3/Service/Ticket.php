<?php

namespace Spinen\ConnectWise\Models\v2019_3\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Ticket Version v2019_3
 *
 * Model for Ticket
 *
 * @property Carbon\Carbon $estimatedStartDate
 * @property Carbon\Carbon $requiredDate
 * @property Spinen\ConnectWise\Models\v2019_3\Service\AgreementReference $agreement
 * @property Spinen\ConnectWise\Models\v2019_3\Service\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2019_3\Service\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_3\Service\ContactReference $contact
 * @property Spinen\ConnectWise\Models\v2019_3\Service\CountryReference $country
 * @property Spinen\ConnectWise\Models\v2019_3\Service\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2019_3\Service\Guid $mobileGuid
 * @property Spinen\ConnectWise\Models\v2019_3\Service\MemberReference $owner
 * @property Spinen\ConnectWise\Models\v2019_3\Service\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_3\Service\OpportunityReference $opportunity
 * @property Spinen\ConnectWise\Models\v2019_3\Service\PriorityReference $priority
 * @property Spinen\ConnectWise\Models\v2019_3\Service\SLAReference $sla
 * @property Spinen\ConnectWise\Models\v2019_3\Service\ServiceItemReference $item
 * @property Spinen\ConnectWise\Models\v2019_3\Service\ServiceLocationReference $serviceLocation
 * @property Spinen\ConnectWise\Models\v2019_3\Service\ServiceSourceReference $source
 * @property Spinen\ConnectWise\Models\v2019_3\Service\ServiceStatusReference $status
 * @property Spinen\ConnectWise\Models\v2019_3\Service\ServiceSubTypeReference $subType
 * @property Spinen\ConnectWise\Models\v2019_3\Service\ServiceTeamReference $team
 * @property Spinen\ConnectWise\Models\v2019_3\Service\ServiceTypeReference $type
 * @property Spinen\ConnectWise\Models\v2019_3\Service\SiteReference $site
 * @property Spinen\ConnectWise\Models\v2019_3\Service\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2019_3\Service\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2019_3\Service\TicketReference $mergedParentTicket
 * @property array $customFields
 * @property boolean $allowAllClientsPortalView
 * @property boolean $approved
 * @property boolean $automaticEmailCcFlag
 * @property boolean $automaticEmailContactFlag
 * @property boolean $automaticEmailResourceFlag
 * @property boolean $closedFlag
 * @property boolean $customerUpdatedFlag
 * @property boolean $hasChildTicket
 * @property boolean $hasMergedChildTicketFlag
 * @property boolean $isInSla
 * @property boolean $lagNonworkingDaysFlag
 * @property boolean $predecessorClosedFlag
 * @property boolean $processNotifications
 * @property boolean $skipCallback
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
 * @property integer $duration
 * @property integer $id
 * @property integer $knowledgeBaseCategoryId
 * @property integer $knowledgeBaseLinkId
 * @property integer $knowledgeBaseSubCategoryId
 * @property integer $lagDays
 * @property integer $parentTicketId
 * @property integer $predecessorId
 * @property integer $resPlanMinutes
 * @property integer $resolveMinutes
 * @property integer $respondMinutes
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
 * @property string $dateResolved
 * @property string $dateResplan
 * @property string $dateResponded
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Service\Metadata',
        'actualHours' => 'float',
        'addressLine1' => 'string',
        'addressLine2' => 'string',
        'agreement' => 'Spinen\ConnectWise\Models\v2019_3\Service\AgreementReference',
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
        'board' => 'Spinen\ConnectWise\Models\v2019_3\Service\BoardReference',
        'budgetHours' => 'float',
        'city' => 'string',
        'closedBy' => 'string',
        'closedDate' => 'string',
        'closedFlag' => 'boolean',
        'company' => 'Spinen\ConnectWise\Models\v2019_3\Service\CompanyReference',
        'contact' => 'Spinen\ConnectWise\Models\v2019_3\Service\ContactReference',
        'contactEmailAddress' => 'string',
        'contactEmailLookup' => 'string',
        'contactName' => 'string',
        'contactPhoneExtension' => 'string',
        'contactPhoneNumber' => 'string',
        'country' => 'Spinen\ConnectWise\Models\v2019_3\Service\CountryReference',
        'currency' => 'Spinen\ConnectWise\Models\v2019_3\Service\CurrencyReference',
        'customFields' => 'array',
        'customerUpdatedFlag' => 'boolean',
        'dateResolved' => 'string',
        'dateResplan' => 'string',
        'dateResponded' => 'string',
        'department' => 'Spinen\ConnectWise\Models\v2019_3\Service\SystemDepartmentReference',
        'duration' => 'integer',
        'estimatedExpenseCost' => 'float',
        'estimatedExpenseRevenue' => 'float',
        'estimatedProductCost' => 'float',
        'estimatedProductRevenue' => 'float',
        'estimatedStartDate' => 'Carbon\Carbon',
        'estimatedTimeCost' => 'float',
        'estimatedTimeRevenue' => 'float',
        'externalXRef' => 'string',
        'hasChildTicket' => 'boolean',
        'hasMergedChildTicketFlag' => 'boolean',
        'hourlyRate' => 'float',
        'id' => 'integer',
        'impact' => 'string',
        'initialDescription' => 'string',
        'initialInternalAnalysis' => 'string',
        'initialResolution' => 'string',
        'isInSla' => 'boolean',
        'item' => 'Spinen\ConnectWise\Models\v2019_3\Service\ServiceItemReference',
        'knowledgeBaseCategoryId' => 'integer',
        'knowledgeBaseLinkId' => 'integer',
        'knowledgeBaseLinkType' => 'string',
        'knowledgeBaseSubCategoryId' => 'integer',
        'lagDays' => 'integer',
        'lagNonworkingDaysFlag' => 'boolean',
        'location' => 'Spinen\ConnectWise\Models\v2019_3\Service\SystemLocationReference',
        'mergedParentTicket' => 'Spinen\ConnectWise\Models\v2019_3\Service\TicketReference',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2019_3\Service\Guid',
        'opportunity' => 'Spinen\ConnectWise\Models\v2019_3\Service\OpportunityReference',
        'owner' => 'Spinen\ConnectWise\Models\v2019_3\Service\MemberReference',
        'parentTicketId' => 'integer',
        'poNumber' => 'string',
        'predecessorClosedFlag' => 'boolean',
        'predecessorId' => 'integer',
        'predecessorType' => 'string',
        'priority' => 'Spinen\ConnectWise\Models\v2019_3\Service\PriorityReference',
        'processNotifications' => 'boolean',
        'recordType' => 'string',
        'requiredDate' => 'Carbon\Carbon',
        'resPlanMinutes' => 'integer',
        'resolveMinutes' => 'integer',
        'resources' => 'string',
        'respondMinutes' => 'integer',
        'serviceLocation' => 'Spinen\ConnectWise\Models\v2019_3\Service\ServiceLocationReference',
        'severity' => 'string',
        'site' => 'Spinen\ConnectWise\Models\v2019_3\Service\SiteReference',
        'siteName' => 'string',
        'skipCallback' => 'boolean',
        'sla' => 'Spinen\ConnectWise\Models\v2019_3\Service\SLAReference',
        'source' => 'Spinen\ConnectWise\Models\v2019_3\Service\ServiceSourceReference',
        'stateIdentifier' => 'string',
        'status' => 'Spinen\ConnectWise\Models\v2019_3\Service\ServiceStatusReference',
        'subBillingAmount' => 'float',
        'subBillingMethod' => 'string',
        'subDateAccepted' => 'string',
        'subType' => 'Spinen\ConnectWise\Models\v2019_3\Service\ServiceSubTypeReference',
        'summary' => 'string',
        'team' => 'Spinen\ConnectWise\Models\v2019_3\Service\ServiceTeamReference',
        'type' => 'Spinen\ConnectWise\Models\v2019_3\Service\ServiceTypeReference',
        'zip' => 'string',
    ];
}
