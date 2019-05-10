<?php

namespace Spinen\ConnectWise\Models\v2019_1\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectPhase Version v2019_1
 *
 * Model for ProjectPhase
 *
 * @property integer $id
 * @property integer $projectId
 * @property string $description
 * @property Spinen\ConnectWise\Models\v2019_1\Project\ProjectBoardReference $board
 * @property Spinen\ConnectWise\Models\v2019_1\Project\PhaseStatusReference $status
 * @property Spinen\ConnectWise\Models\v2019_1\Project\AgreementReference $agreement
 * @property Spinen\ConnectWise\Models\v2019_1\Project\OpportunityReference $opportunity
 * @property Spinen\ConnectWise\Models\v2019_1\Project\ProjectPhaseReference $parentPhase
 * @property string $wbsCode
 * @property string $billTime
 * @property string $billExpenses
 * @property string $billProducts
 * @property boolean $markAsMilestoneFlag
 * @property string $notes
 * @property Carbon\Carbon $deadlineDate
 * @property boolean $billSeparatelyFlag
 * @property string $billingMethod
 * @property float $scheduledHours
 * @property string $scheduledStart
 * @property string $scheduledEnd
 * @property float $actualHours
 * @property string $actualStart
 * @property string $actualEnd
 * @property float $budgetHours
 * @property integer $locationId
 * @property integer $businessUnitId
 * @property float $hourlyRate
 * @property Carbon\Carbon $billingStartDate
 * @property boolean $billPhaseClosedFlag
 * @property boolean $billProjectClosedFlag
 * @property float $downpayment
 * @property string $poNumber
 * @property float $poAmount
 * @property float $estimatedTimeCost
 * @property float $estimatedExpenseCost
 * @property float $estimatedProductCost
 * @property float $estimatedTimeRevenue
 * @property float $estimatedExpenseRevenue
 * @property float $estimatedProductRevenue
 * @property Spinen\ConnectWise\Models\v2019_1\Project\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2019_1\Project\CompanyReference $billToCompany
 * @property Spinen\ConnectWise\Models\v2019_1\Project\ContactReference $billToContact
 * @property Spinen\ConnectWise\Models\v2019_1\Project\SiteReference $billToSite
 * @property Spinen\ConnectWise\Models\v2019_1\Project\CompanyReference $shipToCompany
 * @property Spinen\ConnectWise\Models\v2019_1\Project\ContactReference $shipToContact
 * @property Spinen\ConnectWise\Models\v2019_1\Project\SiteReference $shipToSite
 * @property Spinen\ConnectWise\Models\v2019_1\Project\Metadata $_info
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
        'board' => 'Spinen\ConnectWise\Models\v2019_1\Project\ProjectBoardReference',
        'status' => 'Spinen\ConnectWise\Models\v2019_1\Project\PhaseStatusReference',
        'agreement' => 'Spinen\ConnectWise\Models\v2019_1\Project\AgreementReference',
        'opportunity' => 'Spinen\ConnectWise\Models\v2019_1\Project\OpportunityReference',
        'parentPhase' => 'Spinen\ConnectWise\Models\v2019_1\Project\ProjectPhaseReference',
        'wbsCode' => 'string',
        'billTime' => 'string',
        'billExpenses' => 'string',
        'billProducts' => 'string',
        'markAsMilestoneFlag' => 'boolean',
        'notes' => 'string',
        'deadlineDate' => 'Carbon\Carbon',
        'billSeparatelyFlag' => 'boolean',
        'billingMethod' => 'string',
        'scheduledHours' => 'float',
        'scheduledStart' => 'string',
        'scheduledEnd' => 'string',
        'actualHours' => 'float',
        'actualStart' => 'string',
        'actualEnd' => 'string',
        'budgetHours' => 'float',
        'locationId' => 'integer',
        'businessUnitId' => 'integer',
        'hourlyRate' => 'float',
        'billingStartDate' => 'Carbon\Carbon',
        'billPhaseClosedFlag' => 'boolean',
        'billProjectClosedFlag' => 'boolean',
        'downpayment' => 'float',
        'poNumber' => 'string',
        'poAmount' => 'float',
        'estimatedTimeCost' => 'float',
        'estimatedExpenseCost' => 'float',
        'estimatedProductCost' => 'float',
        'estimatedTimeRevenue' => 'float',
        'estimatedExpenseRevenue' => 'float',
        'estimatedProductRevenue' => 'float',
        'currency' => 'Spinen\ConnectWise\Models\v2019_1\Project\CurrencyReference',
        'billToCompany' => 'Spinen\ConnectWise\Models\v2019_1\Project\CompanyReference',
        'billToContact' => 'Spinen\ConnectWise\Models\v2019_1\Project\ContactReference',
        'billToSite' => 'Spinen\ConnectWise\Models\v2019_1\Project\SiteReference',
        'shipToCompany' => 'Spinen\ConnectWise\Models\v2019_1\Project\CompanyReference',
        'shipToContact' => 'Spinen\ConnectWise\Models\v2019_1\Project\ContactReference',
        'shipToSite' => 'Spinen\ConnectWise\Models\v2019_1\Project\SiteReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Project\Metadata',
        'customFields' => 'array',
    ];
}
