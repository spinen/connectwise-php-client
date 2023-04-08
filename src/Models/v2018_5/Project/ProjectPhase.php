<?php

namespace Spinen\ConnectWise\Models\v2018_5\Project;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectPhase Version v2018_5
 *
 * Model for ProjectPhase
 *
 * @property AgreementReference $agreement
 * @property Carbon $billingStartDate
 * @property Carbon $deadlineDate
 * @property CompanyReference $billToCompany
 * @property CompanyReference $shipToCompany
 * @property ContactReference $billToContact
 * @property ContactReference $shipToContact
 * @property CurrencyReference $currency
 * @property Metadata $_info
 * @property OpportunityReference $opportunity
 * @property PhaseStatusReference $status
 * @property ProjectBoardReference $board
 * @property ProjectPhaseReference $parentPhase
 * @property SiteReference $billToSite
 * @property SiteReference $shipToSite
 * @property array $customFields
 * @property bool $billPhaseClosedFlag
 * @property bool $billProjectClosedFlag
 * @property bool $billSeparatelyFlag
 * @property bool $markAsMilestoneFlag
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
 * @property int $businessUnitId
 * @property int $id
 * @property int $locationId
 * @property int $projectId
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
        '_info' => Metadata::class,
        'actualEnd' => 'string',
        'actualHours' => 'float',
        'actualStart' => 'string',
        'agreement' => AgreementReference::class,
        'billExpenses' => 'string',
        'billPhaseClosedFlag' => 'boolean',
        'billProducts' => 'string',
        'billProjectClosedFlag' => 'boolean',
        'billSeparatelyFlag' => 'boolean',
        'billTime' => 'string',
        'billToCompany' => CompanyReference::class,
        'billToContact' => ContactReference::class,
        'billToSite' => SiteReference::class,
        'billingMethod' => 'string',
        'billingStartDate' => Carbon::class,
        'board' => ProjectBoardReference::class,
        'budgetHours' => 'float',
        'businessUnitId' => 'integer',
        'currency' => CurrencyReference::class,
        'customFields' => 'array',
        'deadlineDate' => Carbon::class,
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
        'opportunity' => OpportunityReference::class,
        'parentPhase' => ProjectPhaseReference::class,
        'poAmount' => 'float',
        'poNumber' => 'string',
        'projectId' => 'integer',
        'scheduledEnd' => 'string',
        'scheduledHours' => 'float',
        'scheduledStart' => 'string',
        'shipToCompany' => CompanyReference::class,
        'shipToContact' => ContactReference::class,
        'shipToSite' => SiteReference::class,
        'status' => PhaseStatusReference::class,
        'wbsCode' => 'string',
    ];
}
