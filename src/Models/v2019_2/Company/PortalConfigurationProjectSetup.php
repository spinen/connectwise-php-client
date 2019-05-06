<?php

namespace Spinen\ConnectWise\Models\v2019_2\Company;

use Spinen\ConnectWise\Support\Model;

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
