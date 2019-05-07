<?php

namespace Spinen\ConnectWise\Models\v2018_6\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Ticket
 *
 * @property integer $id
 * @property string $summary
 * @property boolean $isIssueFlag
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
 * @property double $actualHours
 * @property boolean $approved
 * @property string $subBillingMethod
 * @property double $subBillingAmount
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
 * @property carbon $estimatedStartDate
 * @property integer $duration
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
        'actualHours' => 'double',
        'approved' => 'boolean',
        'subBillingMethod' => 'string',
        'subBillingAmount' => 'double',
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
        'estimatedStartDate' => 'carbon',
        'duration' => 'integer',
        'initialDescription' => 'string',
        'initialInternalAnalysis' => 'string',
        'initialResolution' => 'string',
        'contactEmailLookup' => 'string',
        'processNotifications' => 'boolean',
        'skipCallback' => 'boolean',
        'customFields' => 'array',
    ];
}
