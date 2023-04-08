<?php

namespace Spinen\ConnectWise\Models\v2018_4\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PortalConfigurationProjectSetup Version v2018_4
 *
 * Model for PortalConfigurationProjectSetup
 *
 * @property Metadata $_info
 * @property PortalConfigurationReference $portalConfig
 * @property bool $billingMethodFlag
 * @property bool $contactFlag
 * @property bool $descriptionFlag
 * @property bool $estimatedEndFlag
 * @property bool $estimatedStartFlag
 * @property bool $fixedFeeActualFinishFlag
 * @property bool $fixedFeeActualHrsFlag
 * @property bool $fixedFeeActualStartFlag
 * @property bool $fixedFeeAssignedFlag
 * @property bool $fixedFeeBillFlag
 * @property bool $fixedFeeBudgetHrsFlag
 * @property bool $fixedFeeScheduledFinishFlag
 * @property bool $fixedFeeScheduledHrsFlag
 * @property bool $fixedFeeScheduledStartFlag
 * @property bool $fixedFeeStatusFlag
 * @property bool $lastUpdatedFlag
 * @property bool $projectDetailTotalHoursFlag
 * @property bool $projectIssueActualFinishFlag
 * @property bool $projectIssueActualHrsFlag
 * @property bool $projectIssueActualStartFlag
 * @property bool $projectIssueAssignedFlag
 * @property bool $projectIssueBillFlag
 * @property bool $projectIssueBudgetHrsFlag
 * @property bool $projectIssueScheduledFinishFlag
 * @property bool $projectIssueScheduledHrsFlag
 * @property bool $projectIssueScheduledStartFlag
 * @property bool $projectIssueStatusFlag
 * @property bool $projectManagerFlag
 * @property bool $projectNameFlag
 * @property bool $projectTypeFlag
 * @property bool $statusFlag
 * @property bool $timeMaterialActualFinishFlag
 * @property bool $timeMaterialActualHrsFlag
 * @property bool $timeMaterialActualStartFlag
 * @property bool $timeMaterialAssignedFlag
 * @property bool $timeMaterialBillFlag
 * @property bool $timeMaterialBudgetHrsFlag
 * @property bool $timeMaterialScheduledFinishFlag
 * @property bool $timeMaterialScheduledHrsFlag
 * @property bool $timeMaterialScheduledStartFlag
 * @property bool $timeMaterialStatusFlag
 * @property int $id
 * @property string $onlyDisplay
 */
class PortalConfigurationProjectSetup extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'billingMethodFlag' => 'boolean',
        'contactFlag' => 'boolean',
        'descriptionFlag' => 'boolean',
        'estimatedEndFlag' => 'boolean',
        'estimatedStartFlag' => 'boolean',
        'fixedFeeActualFinishFlag' => 'boolean',
        'fixedFeeActualHrsFlag' => 'boolean',
        'fixedFeeActualStartFlag' => 'boolean',
        'fixedFeeAssignedFlag' => 'boolean',
        'fixedFeeBillFlag' => 'boolean',
        'fixedFeeBudgetHrsFlag' => 'boolean',
        'fixedFeeScheduledFinishFlag' => 'boolean',
        'fixedFeeScheduledHrsFlag' => 'boolean',
        'fixedFeeScheduledStartFlag' => 'boolean',
        'fixedFeeStatusFlag' => 'boolean',
        'id' => 'integer',
        'lastUpdatedFlag' => 'boolean',
        'onlyDisplay' => 'string',
        'portalConfig' => PortalConfigurationReference::class,
        'projectDetailTotalHoursFlag' => 'boolean',
        'projectIssueActualFinishFlag' => 'boolean',
        'projectIssueActualHrsFlag' => 'boolean',
        'projectIssueActualStartFlag' => 'boolean',
        'projectIssueAssignedFlag' => 'boolean',
        'projectIssueBillFlag' => 'boolean',
        'projectIssueBudgetHrsFlag' => 'boolean',
        'projectIssueScheduledFinishFlag' => 'boolean',
        'projectIssueScheduledHrsFlag' => 'boolean',
        'projectIssueScheduledStartFlag' => 'boolean',
        'projectIssueStatusFlag' => 'boolean',
        'projectManagerFlag' => 'boolean',
        'projectNameFlag' => 'boolean',
        'projectTypeFlag' => 'boolean',
        'statusFlag' => 'boolean',
        'timeMaterialActualFinishFlag' => 'boolean',
        'timeMaterialActualHrsFlag' => 'boolean',
        'timeMaterialActualStartFlag' => 'boolean',
        'timeMaterialAssignedFlag' => 'boolean',
        'timeMaterialBillFlag' => 'boolean',
        'timeMaterialBudgetHrsFlag' => 'boolean',
        'timeMaterialScheduledFinishFlag' => 'boolean',
        'timeMaterialScheduledHrsFlag' => 'boolean',
        'timeMaterialScheduledStartFlag' => 'boolean',
        'timeMaterialStatusFlag' => 'boolean',
    ];
}
