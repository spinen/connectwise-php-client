<?php

namespace Spinen\ConnectWise\Models\v2018_6\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Board
 *
 * @property integer $id
 * @property string $name
 * @property boolean $inactiveFlag
 * @property boolean $sendToContactFlag
 * @property boolean $sendToResourceFlag
 * @property boolean $projectFlag
 * @property boolean $showDependenciesFlag
 * @property boolean $showEstimatesFlag
 * @property boolean $billTicketsAfterClosedFlag
 * @property boolean $billTicketSeparatelyFlag
 * @property boolean $billUnapprovedTimeExpenseFlag
 * @property boolean $overrideBillingSetupFlag
 * @property string $billTime
 * @property string $billExpense
 * @property string $billProduct
 * @property boolean $autoAssignNewTicketsFlag
 * @property boolean $autoAssignNewECTicketsFlag
 * @property boolean $autoAssignNewPortalTicketsFlag
 * @property boolean $discussionsLockedFlag
 * @property boolean $timeEntryLockedFlag
 * @property string $notifyEmailFrom
 * @property string $notifyEmailFromName
 * @property boolean $closedLoopDiscussionsFlag
 * @property boolean $closedLoopResolutionFlag
 * @property boolean $closedLoopInternalAnalysisFlag
 * @property boolean $timeEntryDiscussionFlag
 * @property boolean $timeEntryResolutionFlag
 * @property boolean $timeEntryInternalAnalysisFlag
 * @property string $problemSort
 * @property string $resolutionSort
 * @property string $internalAnalysisSort
 * @property boolean $emailConnectorAllowReopenClosedFlag
 * @property boolean $emailConnectorReopenResourcesFlag
 * @property boolean $emailConnectorNewTicketNoMatchFlag
 * @property boolean $emailConnectorNeverReopenByDaysFlag
 * @property integer $emailConnectorReopenDaysLimit
 * @property boolean $useMemberDisplayNameFlag
 * @property boolean $sendToCCFlag
 * @property boolean $autoAssignTicketOwnerFlag
 * @property boolean $closedLoopAllFlag
 * @property string $percentageCalculation
 * @property string $allSort
 */
class Board extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'inactiveFlag' => 'boolean',
        'sendToContactFlag' => 'boolean',
        'sendToResourceFlag' => 'boolean',
        'projectFlag' => 'boolean',
        'showDependenciesFlag' => 'boolean',
        'showEstimatesFlag' => 'boolean',
        'billTicketsAfterClosedFlag' => 'boolean',
        'billTicketSeparatelyFlag' => 'boolean',
        'billUnapprovedTimeExpenseFlag' => 'boolean',
        'overrideBillingSetupFlag' => 'boolean',
        'billTime' => 'string',
        'billExpense' => 'string',
        'billProduct' => 'string',
        'autoAssignNewTicketsFlag' => 'boolean',
        'autoAssignNewECTicketsFlag' => 'boolean',
        'autoAssignNewPortalTicketsFlag' => 'boolean',
        'discussionsLockedFlag' => 'boolean',
        'timeEntryLockedFlag' => 'boolean',
        'notifyEmailFrom' => 'string',
        'notifyEmailFromName' => 'string',
        'closedLoopDiscussionsFlag' => 'boolean',
        'closedLoopResolutionFlag' => 'boolean',
        'closedLoopInternalAnalysisFlag' => 'boolean',
        'timeEntryDiscussionFlag' => 'boolean',
        'timeEntryResolutionFlag' => 'boolean',
        'timeEntryInternalAnalysisFlag' => 'boolean',
        'problemSort' => 'string',
        'resolutionSort' => 'string',
        'internalAnalysisSort' => 'string',
        'emailConnectorAllowReopenClosedFlag' => 'boolean',
        'emailConnectorReopenResourcesFlag' => 'boolean',
        'emailConnectorNewTicketNoMatchFlag' => 'boolean',
        'emailConnectorNeverReopenByDaysFlag' => 'boolean',
        'emailConnectorReopenDaysLimit' => 'integer',
        'useMemberDisplayNameFlag' => 'boolean',
        'sendToCCFlag' => 'boolean',
        'autoAssignTicketOwnerFlag' => 'boolean',
        'closedLoopAllFlag' => 'boolean',
        'percentageCalculation' => 'string',
        'allSort' => 'string',
    ];
}
