<?php

namespace Spinen\ConnectWise\Models\v2018_5\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Board Version v2018_5
 *
 * Model for Board
 *
 * @property DocumentReference $boardIcon
 * @property MemberReference $dispatchMember
 * @property MemberReference $dutyManagerMember
 * @property MemberReference $oncallMember
 * @property MemberReference $serviceManagerMember
 * @property Metadata $_info
 * @property ServiceEmailTemplateReference $contactTemplate
 * @property ServiceEmailTemplateReference $resourceTemplate
 * @property ServiceSignoffReference $signOffTemplate
 * @property ServiceStatusReference $autoCloseStatus
 * @property ServiceStatusReference $emailConnectorReopenStatus
 * @property SystemDepartmentReference $department
 * @property SystemLocationReference $location
 * @property WorkRoleReference $workRole
 * @property WorkTypeReference $workType
 * @property boolean $autoAssignNewECTicketsFlag
 * @property boolean $autoAssignNewPortalTicketsFlag
 * @property boolean $autoAssignNewTicketsFlag
 * @property boolean $autoAssignTicketOwnerFlag
 * @property boolean $billTicketSeparatelyFlag
 * @property boolean $billTicketsAfterClosedFlag
 * @property boolean $billUnapprovedTimeExpenseFlag
 * @property boolean $closedLoopAllFlag
 * @property boolean $closedLoopDiscussionsFlag
 * @property boolean $closedLoopInternalAnalysisFlag
 * @property boolean $closedLoopResolutionFlag
 * @property boolean $discussionsLockedFlag
 * @property boolean $emailConnectorAllowReopenClosedFlag
 * @property boolean $emailConnectorNeverReopenByDaysFlag
 * @property boolean $emailConnectorNewTicketNoMatchFlag
 * @property boolean $emailConnectorReopenResourcesFlag
 * @property boolean $inactiveFlag
 * @property boolean $overrideBillingSetupFlag
 * @property boolean $projectFlag
 * @property boolean $sendToCCFlag
 * @property boolean $sendToContactFlag
 * @property boolean $sendToResourceFlag
 * @property boolean $showDependenciesFlag
 * @property boolean $showEstimatesFlag
 * @property boolean $timeEntryDiscussionFlag
 * @property boolean $timeEntryInternalAnalysisFlag
 * @property boolean $timeEntryLockedFlag
 * @property boolean $timeEntryResolutionFlag
 * @property boolean $useMemberDisplayNameFlag
 * @property integer $emailConnectorReopenDaysLimit
 * @property integer $id
 * @property string $allSort
 * @property string $billExpense
 * @property string $billProduct
 * @property string $billTime
 * @property string $internalAnalysisSort
 * @property string $name
 * @property string $notifyEmailFrom
 * @property string $notifyEmailFromName
 * @property string $percentageCalculation
 * @property string $problemSort
 * @property string $resolutionSort
 */
class Board extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'allSort' => 'string',
        'autoAssignNewECTicketsFlag' => 'boolean',
        'autoAssignNewPortalTicketsFlag' => 'boolean',
        'autoAssignNewTicketsFlag' => 'boolean',
        'autoAssignTicketOwnerFlag' => 'boolean',
        'autoCloseStatus' => ServiceStatusReference::class,
        'billExpense' => 'string',
        'billProduct' => 'string',
        'billTicketSeparatelyFlag' => 'boolean',
        'billTicketsAfterClosedFlag' => 'boolean',
        'billTime' => 'string',
        'billUnapprovedTimeExpenseFlag' => 'boolean',
        'boardIcon' => DocumentReference::class,
        'closedLoopAllFlag' => 'boolean',
        'closedLoopDiscussionsFlag' => 'boolean',
        'closedLoopInternalAnalysisFlag' => 'boolean',
        'closedLoopResolutionFlag' => 'boolean',
        'contactTemplate' => ServiceEmailTemplateReference::class,
        'department' => SystemDepartmentReference::class,
        'discussionsLockedFlag' => 'boolean',
        'dispatchMember' => MemberReference::class,
        'dutyManagerMember' => MemberReference::class,
        'emailConnectorAllowReopenClosedFlag' => 'boolean',
        'emailConnectorNeverReopenByDaysFlag' => 'boolean',
        'emailConnectorNewTicketNoMatchFlag' => 'boolean',
        'emailConnectorReopenDaysLimit' => 'integer',
        'emailConnectorReopenResourcesFlag' => 'boolean',
        'emailConnectorReopenStatus' => ServiceStatusReference::class,
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'internalAnalysisSort' => 'string',
        'location' => SystemLocationReference::class,
        'name' => 'string',
        'notifyEmailFrom' => 'string',
        'notifyEmailFromName' => 'string',
        'oncallMember' => MemberReference::class,
        'overrideBillingSetupFlag' => 'boolean',
        'percentageCalculation' => 'string',
        'problemSort' => 'string',
        'projectFlag' => 'boolean',
        'resolutionSort' => 'string',
        'resourceTemplate' => ServiceEmailTemplateReference::class,
        'sendToCCFlag' => 'boolean',
        'sendToContactFlag' => 'boolean',
        'sendToResourceFlag' => 'boolean',
        'serviceManagerMember' => MemberReference::class,
        'showDependenciesFlag' => 'boolean',
        'showEstimatesFlag' => 'boolean',
        'signOffTemplate' => ServiceSignoffReference::class,
        'timeEntryDiscussionFlag' => 'boolean',
        'timeEntryInternalAnalysisFlag' => 'boolean',
        'timeEntryLockedFlag' => 'boolean',
        'timeEntryResolutionFlag' => 'boolean',
        'useMemberDisplayNameFlag' => 'boolean',
        'workRole' => WorkRoleReference::class,
        'workType' => WorkTypeReference::class,
    ];
}
