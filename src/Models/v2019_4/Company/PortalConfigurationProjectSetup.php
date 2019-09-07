<?php

namespace Spinen\ConnectWise\Models\v2019_4\Company;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class PortalConfigurationProjectSetup Version v2019_4
 *
 * Model for PortalConfigurationProjectSetup
 *
 * @property Metadata $_info
 * @property PortalConfigurationReference $portalConfig
 * @property boolean $billingMethodFlag
 * @property boolean $contactFlag
 * @property boolean $descriptionFlag
 * @property boolean $estimatedEndFlag
 * @property boolean $estimatedStartFlag
 * @property boolean $fixedFeeActualFinishFlag
 * @property boolean $fixedFeeActualHrsFlag
 * @property boolean $fixedFeeActualStartFlag
 * @property boolean $fixedFeeAssignedFlag
 * @property boolean $fixedFeeBillFlag
 * @property boolean $fixedFeeBudgetHrsFlag
 * @property boolean $fixedFeeScheduledFinishFlag
 * @property boolean $fixedFeeScheduledHrsFlag
 * @property boolean $fixedFeeScheduledStartFlag
 * @property boolean $fixedFeeStatusFlag
 * @property boolean $lastUpdatedFlag
 * @property boolean $projectDetailTotalHoursFlag
 * @property boolean $projectIssueActualFinishFlag
 * @property boolean $projectIssueActualHrsFlag
 * @property boolean $projectIssueActualStartFlag
 * @property boolean $projectIssueAssignedFlag
 * @property boolean $projectIssueBillFlag
 * @property boolean $projectIssueBudgetHrsFlag
 * @property boolean $projectIssueScheduledFinishFlag
 * @property boolean $projectIssueScheduledHrsFlag
 * @property boolean $projectIssueScheduledStartFlag
 * @property boolean $projectIssueStatusFlag
 * @property boolean $projectManagerFlag
 * @property boolean $projectNameFlag
 * @property boolean $projectTypeFlag
 * @property boolean $statusFlag
 * @property boolean $timeMaterialActualFinishFlag
 * @property boolean $timeMaterialActualHrsFlag
 * @property boolean $timeMaterialActualStartFlag
 * @property boolean $timeMaterialAssignedFlag
 * @property boolean $timeMaterialBillFlag
 * @property boolean $timeMaterialBudgetHrsFlag
 * @property boolean $timeMaterialScheduledFinishFlag
 * @property boolean $timeMaterialScheduledHrsFlag
 * @property boolean $timeMaterialScheduledStartFlag
 * @property boolean $timeMaterialStatusFlag
 * @property integer $id
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
        'timeMaterialStatusFlag' => 'boolean'
    ];
}
