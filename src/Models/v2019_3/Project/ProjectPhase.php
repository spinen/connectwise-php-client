<?php

namespace Spinen\ConnectWise\Models\v2019_3\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectPhase Version v2019_3
 *
 * Model for ProjectPhase
 *
 * @property Carbon\Carbon $billingStartDate
 * @property Carbon\Carbon $deadlineDate
 * @property Spinen\ConnectWise\Models\v2019_3\Project\AgreementReference $agreement
 * @property Spinen\ConnectWise\Models\v2019_3\Project\CompanyReference $billToCompany
 * @property Spinen\ConnectWise\Models\v2019_3\Project\CompanyReference $shipToCompany
 * @property Spinen\ConnectWise\Models\v2019_3\Project\ContactReference $billToContact
 * @property Spinen\ConnectWise\Models\v2019_3\Project\ContactReference $shipToContact
 * @property Spinen\ConnectWise\Models\v2019_3\Project\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2019_3\Project\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_3\Project\OpportunityReference $opportunity
 * @property Spinen\ConnectWise\Models\v2019_3\Project\PhaseStatusReference $status
 * @property Spinen\ConnectWise\Models\v2019_3\Project\ProjectBoardReference $board
 * @property Spinen\ConnectWise\Models\v2019_3\Project\ProjectPhaseReference $parentPhase
 * @property Spinen\ConnectWise\Models\v2019_3\Project\SiteReference $billToSite
 * @property Spinen\ConnectWise\Models\v2019_3\Project\SiteReference $shipToSite
 * @property array $customFields
 * @property boolean $billPhaseClosedFlag
 * @property boolean $billProjectClosedFlag
 * @property boolean $billSeparatelyFlag
 * @property boolean $markAsMilestoneFlag
 * @property float $actualHours
 * @property float $budgetHours
 * @property float $downpayment
 * @property float $estimatedExpenseCost
 * @property float $estimatedExpenseRevenue
 * @property float $estimatedProductCost
 * @property float $estimatedProductRevenue
 * @property float $estimatedTimeCost
 * @property float $estimatedTimeRevenue
 * @property float $hourlyRate
 * @property float $poAmount
 * @property float $scheduledHours
 * @property integer $businessUnitId
 * @property integer $id
 * @property integer $locationId
 * @property integer $projectId
 * @property string $actualEnd
 * @property string $actualStart
 * @property string $billExpenses
 * @property string $billProducts
 * @property string $billTime
 * @property string $billingMethod
 * @property string $description
 * @property string $notes
 * @property string $poNumber
 * @property string $scheduledEnd
 * @property string $scheduledStart
 * @property string $wbsCode
 */
class ProjectPhase extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Project\Metadata',
        'actualEnd' => 'string',
        'actualHours' => 'float',
        'actualStart' => 'string',
        'agreement' => 'Spinen\ConnectWise\Models\v2019_3\Project\AgreementReference',
        'billExpenses' => 'string',
        'billPhaseClosedFlag' => 'boolean',
        'billProducts' => 'string',
        'billProjectClosedFlag' => 'boolean',
        'billSeparatelyFlag' => 'boolean',
        'billTime' => 'string',
        'billToCompany' => 'Spinen\ConnectWise\Models\v2019_3\Project\CompanyReference',
        'billToContact' => 'Spinen\ConnectWise\Models\v2019_3\Project\ContactReference',
        'billToSite' => 'Spinen\ConnectWise\Models\v2019_3\Project\SiteReference',
        'billingMethod' => 'string',
        'billingStartDate' => 'Carbon\Carbon',
        'board' => 'Spinen\ConnectWise\Models\v2019_3\Project\ProjectBoardReference',
        'budgetHours' => 'float',
        'businessUnitId' => 'integer',
        'currency' => 'Spinen\ConnectWise\Models\v2019_3\Project\CurrencyReference',
        'customFields' => 'array',
        'deadlineDate' => 'Carbon\Carbon',
        'description' => 'string',
        'downpayment' => 'float',
        'estimatedExpenseCost' => 'float',
        'estimatedExpenseRevenue' => 'float',
        'estimatedProductCost' => 'float',
        'estimatedProductRevenue' => 'float',
        'estimatedTimeCost' => 'float',
        'estimatedTimeRevenue' => 'float',
        'hourlyRate' => 'float',
        'id' => 'integer',
        'locationId' => 'integer',
        'markAsMilestoneFlag' => 'boolean',
        'notes' => 'string',
        'opportunity' => 'Spinen\ConnectWise\Models\v2019_3\Project\OpportunityReference',
        'parentPhase' => 'Spinen\ConnectWise\Models\v2019_3\Project\ProjectPhaseReference',
        'poAmount' => 'float',
        'poNumber' => 'string',
        'projectId' => 'integer',
        'scheduledEnd' => 'string',
        'scheduledHours' => 'float',
        'scheduledStart' => 'string',
        'shipToCompany' => 'Spinen\ConnectWise\Models\v2019_3\Project\CompanyReference',
        'shipToContact' => 'Spinen\ConnectWise\Models\v2019_3\Project\ContactReference',
        'shipToSite' => 'Spinen\ConnectWise\Models\v2019_3\Project\SiteReference',
        'status' => 'Spinen\ConnectWise\Models\v2019_3\Project\PhaseStatusReference',
        'wbsCode' => 'string',
    ];
}
