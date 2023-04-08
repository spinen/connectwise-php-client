<?php

namespace Spinen\ConnectWise\Models\v2018_4\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Board Version v2018_4
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
 * @property bool $autoAssignNewECTicketsFlag
 * @property bool $autoAssignNewPortalTicketsFlag
 * @property bool $autoAssignNewTicketsFlag
 * @property bool $autoAssignTicketOwnerFlag
 * @property bool $billTicketSeparatelyFlag
 * @property bool $billTicketsAfterClosedFlag
 * @property bool $billUnapprovedTimeExpenseFlag
 * @property bool $closedLoopAllFlag
 * @property bool $closedLoopDiscussionsFlag
 * @property bool $closedLoopInternalAnalysisFlag
 * @property bool $closedLoopResolutionFlag
 * @property bool $discussionsLockedFlag
 * @property bool $emailConnectorAllowReopenClosedFlag
 * @property bool $emailConnectorNeverReopenByDaysFlag
 * @property bool $emailConnectorNewTicketNoMatchFlag
 * @property bool $emailConnectorReopenResourcesFlag
 * @property bool $inactiveFlag
 * @property bool $overrideBillingSetupFlag
 * @property bool $projectFlag
 * @property bool $sendToCCFlag
 * @property bool $sendToContactFlag
 * @property bool $sendToResourceFlag
 * @property bool $showDependenciesFlag
 * @property bool $showEstimatesFlag
 * @property bool $timeEntryDiscussionFlag
 * @property bool $timeEntryInternalAnalysisFlag
 * @property bool $timeEntryLockedFlag
 * @property bool $timeEntryResolutionFlag
 * @property bool $useMemberDisplayNameFlag
 * @property int $emailConnectorReopenDaysLimit
 * @property int $id
 * @property string $allSort
 * @property string $billExpense
 * @property string $billProduct
 * @property string $billTime
 * @property string $internalAnalysisSort
 * @property string $name
 * @property string $notifyEmailFrom
 * @property string $notifyEmailFromName
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
