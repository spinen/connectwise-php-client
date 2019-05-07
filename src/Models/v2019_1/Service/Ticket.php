<?php

namespace Spinen\ConnectWise\Models\v2019_1\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Ticket
 *
 * @property integer $id
 * @property string $summary
 * @property string $recordType
 * @property string $wbsCode
 * @property string $siteName
 * @property string $addressLine1
 * @property string $addressLine2
 * @property string $city
 * @property string $stateIdentifier
 * @property string $zip
 * @property string $contactName
 * @property string $contactPhoneNumber
 * @property string $contactPhoneExtension
 * @property string $contactEmailAddress
 * @property carbon $requiredDate
 * @property double $budgetHours
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
 * @property double $actualHours
 * @property boolean $approved
 * @property double $estimatedExpenseCost
 * @property double $estimatedExpenseRevenue
 * @property double $estimatedProductCost
 * @property double $estimatedProductRevenue
 * @property double $estimatedTimeCost
 * @property double $estimatedTimeRevenue
 * @property string $billingMethod
 * @property double $billingAmount
 * @property double $hourlyRate
 * @property string $subBillingMethod
 * @property double $subBillingAmount
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
 * @property carbon $estimatedStartDate
 * @property integer $duration
 * @property integer $locationId
 * @property integer $businessUnitId
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
        'wbsCode' => 'string',
        'siteName' => 'string',
        'addressLine1' => 'string',
        'addressLine2' => 'string',
        'city' => 'string',
        'stateIdentifier' => 'string',
        'zip' => 'string',
        'contactName' => 'string',
        'contactPhoneNumber' => 'string',
        'contactPhoneExtension' => 'string',
        'contactEmailAddress' => 'string',
        'requiredDate' => 'carbon',
        'budgetHours' => 'double',
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
        'actualHours' => 'double',
        'approved' => 'boolean',
        'estimatedExpenseCost' => 'double',
        'estimatedExpenseRevenue' => 'double',
        'estimatedProductCost' => 'double',
        'estimatedProductRevenue' => 'double',
        'estimatedTimeCost' => 'double',
        'estimatedTimeRevenue' => 'double',
        'billingMethod' => 'string',
        'billingAmount' => 'double',
        'hourlyRate' => 'double',
        'subBillingMethod' => 'string',
        'subBillingAmount' => 'double',
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
        'estimatedStartDate' => 'carbon',
        'duration' => 'integer',
        'locationId' => 'integer',
        'businessUnitId' => 'integer',
    ];
}
