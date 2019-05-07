<?php

namespace Spinen\ConnectWise\Models\v2019_3\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PortalConfigurationProjectSetup
 *
 * @property integer $id
 * @property boolean $projectNameFlag
 * @property boolean $projectTypeFlag
 * @property boolean $statusFlag
 * @property boolean $projectManagerFlag
 * @property boolean $billingMethodFlag
 * @property boolean $contactFlag
 * @property boolean $estimatedStartFlag
 * @property boolean $estimatedEndFlag
 * @property boolean $descriptionFlag
 * @property boolean $lastUpdatedFlag
 * @property string $onlyDisplay
 * @property boolean $timeMaterialBudgetHrsFlag
 * @property boolean $timeMaterialScheduledStartFlag
 * @property boolean $timeMaterialScheduledFinishFlag
 * @property boolean $timeMaterialScheduledHrsFlag
 * @property boolean $timeMaterialActualStartFlag
 * @property boolean $timeMaterialActualFinishFlag
 * @property boolean $timeMaterialActualHrsFlag
 * @property boolean $timeMaterialBillFlag
 * @property boolean $timeMaterialStatusFlag
 * @property boolean $timeMaterialAssignedFlag
 * @property boolean $fixedFeeBudgetHrsFlag
 * @property boolean $fixedFeeScheduledStartFlag
 * @property boolean $fixedFeeScheduledFinishFlag
 * @property boolean $fixedFeeScheduledHrsFlag
 * @property boolean $fixedFeeActualStartFlag
 * @property boolean $fixedFeeActualFinishFlag
 * @property boolean $fixedFeeActualHrsFlag
 * @property boolean $fixedFeeBillFlag
 * @property boolean $fixedFeeStatusFlag
 * @property boolean $fixedFeeAssignedFlag
 * @property boolean $projectIssueBudgetHrsFlag
 * @property boolean $projectIssueScheduledStartFlag
 * @property boolean $projectIssueScheduledFinishFlag
 * @property boolean $projectIssueScheduledHrsFlag
 * @property boolean $projectIssueActualStartFlag
 * @property boolean $projectIssueActualFinishFlag
 * @property boolean $projectIssueActualHrsFlag
 * @property boolean $projectIssueBillFlag
 * @property boolean $projectIssueStatusFlag
 * @property boolean $projectIssueAssignedFlag
 * @property boolean $projectDetailTotalHoursFlag
 */
class PortalConfigurationProjectSetup extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'projectNameFlag' => 'boolean',
        'projectTypeFlag' => 'boolean',
        'statusFlag' => 'boolean',
        'projectManagerFlag' => 'boolean',
        'billingMethodFlag' => 'boolean',
        'contactFlag' => 'boolean',
        'estimatedStartFlag' => 'boolean',
        'estimatedEndFlag' => 'boolean',
        'descriptionFlag' => 'boolean',
        'lastUpdatedFlag' => 'boolean',
        'onlyDisplay' => 'string',
        'timeMaterialBudgetHrsFlag' => 'boolean',
        'timeMaterialScheduledStartFlag' => 'boolean',
        'timeMaterialScheduledFinishFlag' => 'boolean',
        'timeMaterialScheduledHrsFlag' => 'boolean',
        'timeMaterialActualStartFlag' => 'boolean',
        'timeMaterialActualFinishFlag' => 'boolean',
        'timeMaterialActualHrsFlag' => 'boolean',
        'timeMaterialBillFlag' => 'boolean',
        'timeMaterialStatusFlag' => 'boolean',
        'timeMaterialAssignedFlag' => 'boolean',
        'fixedFeeBudgetHrsFlag' => 'boolean',
        'fixedFeeScheduledStartFlag' => 'boolean',
        'fixedFeeScheduledFinishFlag' => 'boolean',
        'fixedFeeScheduledHrsFlag' => 'boolean',
        'fixedFeeActualStartFlag' => 'boolean',
        'fixedFeeActualFinishFlag' => 'boolean',
        'fixedFeeActualHrsFlag' => 'boolean',
        'fixedFeeBillFlag' => 'boolean',
        'fixedFeeStatusFlag' => 'boolean',
        'fixedFeeAssignedFlag' => 'boolean',
        'projectIssueBudgetHrsFlag' => 'boolean',
        'projectIssueScheduledStartFlag' => 'boolean',
        'projectIssueScheduledFinishFlag' => 'boolean',
        'projectIssueScheduledHrsFlag' => 'boolean',
        'projectIssueActualStartFlag' => 'boolean',
        'projectIssueActualFinishFlag' => 'boolean',
        'projectIssueActualHrsFlag' => 'boolean',
        'projectIssueBillFlag' => 'boolean',
        'projectIssueStatusFlag' => 'boolean',
        'projectIssueAssignedFlag' => 'boolean',
        'projectDetailTotalHoursFlag' => 'boolean',
    ];
}
