<?php

namespace Spinen\ConnectWise\Models\v2018_5\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectPhase Version v2018_5
 * 
 * Model for ProjectPhase
 *
 * @property integer $id
 * @property integer $projectId
 * @property string $description
 * @property Spinen\ConnectWise\Models\v2018_5\Project\ProjectBoardReference $board
 * @property Spinen\ConnectWise\Models\v2018_5\Project\PhaseStatusReference $status
 * @property Spinen\ConnectWise\Models\v2018_5\Project\AgreementReference $agreement
 * @property Spinen\ConnectWise\Models\v2018_5\Project\OpportunityReference $opportunity
 * @property Spinen\ConnectWise\Models\v2018_5\Project\ProjectPhaseReference $parentPhase
 * @property string $wbsCode
 * @property string $billTime
 * @property string $billExpenses
 * @property string $billProducts
 * @property boolean $markAsMilestoneFlag
 * @property string $notes
 * @property string $deadlineDate
 * @property boolean $billSeparatelyFlag
 * @property string $billingMethod
 * @property number $scheduledHours
 * @property string $scheduledStart
 * @property string $scheduledEnd
 * @property number $actualHours
 * @property string $actualStart
 * @property string $actualEnd
 * @property number $budgetHours
 * @property integer $locationId
 * @property integer $businessUnitId
 * @property number $hourlyRate
 * @property string $billingStartDate
 * @property boolean $billPhaseClosedFlag
 * @property boolean $billProjectClosedFlag
 * @property number $downpayment
 * @property string $poNumber
 * @property number $poAmount
 * @property number $estimatedTimeCost
 * @property number $estimatedExpenseCost
 * @property number $estimatedProductCost
 * @property number $estimatedTimeRevenue
 * @property number $estimatedExpenseRevenue
 * @property number $estimatedProductRevenue
 * @property Spinen\ConnectWise\Models\v2018_5\Project\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2018_5\Project\CompanyReference $billToCompany
 * @property Spinen\ConnectWise\Models\v2018_5\Project\ContactReference $billToContact
 * @property Spinen\ConnectWise\Models\v2018_5\Project\SiteReference $billToSite
 * @property Spinen\ConnectWise\Models\v2018_5\Project\CompanyReference $shipToCompany
 * @property Spinen\ConnectWise\Models\v2018_5\Project\ContactReference $shipToContact
 * @property Spinen\ConnectWise\Models\v2018_5\Project\SiteReference $shipToSite
 * @property Spinen\ConnectWise\Models\v2018_5\Project\Metadata $_info
 * @property array $customFields
 */
class ProjectPhase extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'projectId' => 'integer',
        'description' => 'string',
        'board' => 'Spinen\ConnectWise\Models\v2018_5\Project\ProjectBoardReference',
        'status' => 'Spinen\ConnectWise\Models\v2018_5\Project\PhaseStatusReference',
        'agreement' => 'Spinen\ConnectWise\Models\v2018_5\Project\AgreementReference',
        'opportunity' => 'Spinen\ConnectWise\Models\v2018_5\Project\OpportunityReference',
        'parentPhase' => 'Spinen\ConnectWise\Models\v2018_5\Project\ProjectPhaseReference',
        'wbsCode' => 'string',
        'billTime' => 'string',
        'billExpenses' => 'string',
        'billProducts' => 'string',
        'markAsMilestoneFlag' => 'boolean',
        'notes' => 'string',
        'deadlineDate' => 'string',
        'billSeparatelyFlag' => 'boolean',
        'billingMethod' => 'string',
        'scheduledHours' => 'number',
        'scheduledStart' => 'string',
        'scheduledEnd' => 'string',
        'actualHours' => 'number',
        'actualStart' => 'string',
        'actualEnd' => 'string',
        'budgetHours' => 'number',
        'locationId' => 'integer',
        'businessUnitId' => 'integer',
        'hourlyRate' => 'number',
        'billingStartDate' => 'string',
        'billPhaseClosedFlag' => 'boolean',
        'billProjectClosedFlag' => 'boolean',
        'downpayment' => 'number',
        'poNumber' => 'string',
        'poAmount' => 'number',
        'estimatedTimeCost' => 'number',
        'estimatedExpenseCost' => 'number',
        'estimatedProductCost' => 'number',
        'estimatedTimeRevenue' => 'number',
        'estimatedExpenseRevenue' => 'number',
        'estimatedProductRevenue' => 'number',
        'currency' => 'Spinen\ConnectWise\Models\v2018_5\Project\CurrencyReference',
        'billToCompany' => 'Spinen\ConnectWise\Models\v2018_5\Project\CompanyReference',
        'billToContact' => 'Spinen\ConnectWise\Models\v2018_5\Project\ContactReference',
        'billToSite' => 'Spinen\ConnectWise\Models\v2018_5\Project\SiteReference',
        'shipToCompany' => 'Spinen\ConnectWise\Models\v2018_5\Project\CompanyReference',
        'shipToContact' => 'Spinen\ConnectWise\Models\v2018_5\Project\ContactReference',
        'shipToSite' => 'Spinen\ConnectWise\Models\v2018_5\Project\SiteReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Project\Metadata',
        'customFields' => 'array',
    ];
}
