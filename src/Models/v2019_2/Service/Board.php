<?php

namespace Spinen\ConnectWise\Models\v2019_2\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Board Version v2019_2
 *
 * Model for Board
 *
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2019_2\Service\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2019_2\Service\SystemDepartmentReference $department
 * @property boolean $inactiveFlag
 * @property Spinen\ConnectWise\Models\v2019_2\Service\ServiceSignoffReference $signOffTemplate
 * @property boolean $sendToContactFlag
 * @property Spinen\ConnectWise\Models\v2019_2\Service\ServiceEmailTemplateReference $contactTemplate
 * @property boolean $sendToResourceFlag
 * @property Spinen\ConnectWise\Models\v2019_2\Service\ServiceEmailTemplateReference $resourceTemplate
 * @property boolean $projectFlag
 * @property boolean $showDependenciesFlag
 * @property boolean $showEstimatesFlag
 * @property Spinen\ConnectWise\Models\v2019_2\Service\DocumentReference $boardIcon
 * @property boolean $billTicketsAfterClosedFlag
 * @property boolean $billTicketSeparatelyFlag
 * @property boolean $billUnapprovedTimeExpenseFlag
 * @property boolean $overrideBillingSetupFlag
 * @property Spinen\ConnectWise\Models\v2019_2\Service\MemberReference $dispatchMember
 * @property Spinen\ConnectWise\Models\v2019_2\Service\MemberReference $serviceManagerMember
 * @property Spinen\ConnectWise\Models\v2019_2\Service\MemberReference $dutyManagerMember
 * @property Spinen\ConnectWise\Models\v2019_2\Service\MemberReference $oncallMember
 * @property Spinen\ConnectWise\Models\v2019_2\Service\WorkRoleReference $workRole
 * @property Spinen\ConnectWise\Models\v2019_2\Service\WorkTypeReference $workType
 * @property string $billTime
 * @property string $billExpense
 * @property string $billProduct
 * @property Spinen\ConnectWise\Models\v2019_2\Service\ServiceStatusReference $autoCloseStatus
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
 * @property Spinen\ConnectWise\Models\v2019_2\Service\ServiceStatusReference $emailConnectorReopenStatus
 * @property boolean $emailConnectorReopenResourcesFlag
 * @property boolean $emailConnectorNewTicketNoMatchFlag
 * @property boolean $emailConnectorNeverReopenByDaysFlag
 * @property integer $emailConnectorReopenDaysLimit
 * @property boolean $emailConnectorNeverReopenByDaysClosedFlag
 * @property integer $emailConnectorReopenDaysClosedLimit
 * @property boolean $useMemberDisplayNameFlag
 * @property boolean $sendToCCFlag
 * @property boolean $autoAssignTicketOwnerFlag
 * @property boolean $closedLoopAllFlag
 * @property string $percentageCalculation
 * @property string $allSort
 * @property Spinen\ConnectWise\Models\v2019_2\Service\Metadata $_info
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
        'location' => 'Spinen\ConnectWise\Models\v2019_2\Service\SystemLocationReference',
        'department' => 'Spinen\ConnectWise\Models\v2019_2\Service\SystemDepartmentReference',
        'inactiveFlag' => 'boolean',
        'signOffTemplate' => 'Spinen\ConnectWise\Models\v2019_2\Service\ServiceSignoffReference',
        'sendToContactFlag' => 'boolean',
        'contactTemplate' => 'Spinen\ConnectWise\Models\v2019_2\Service\ServiceEmailTemplateReference',
        'sendToResourceFlag' => 'boolean',
        'resourceTemplate' => 'Spinen\ConnectWise\Models\v2019_2\Service\ServiceEmailTemplateReference',
        'projectFlag' => 'boolean',
        'showDependenciesFlag' => 'boolean',
        'showEstimatesFlag' => 'boolean',
        'boardIcon' => 'Spinen\ConnectWise\Models\v2019_2\Service\DocumentReference',
        'billTicketsAfterClosedFlag' => 'boolean',
        'billTicketSeparatelyFlag' => 'boolean',
        'billUnapprovedTimeExpenseFlag' => 'boolean',
        'overrideBillingSetupFlag' => 'boolean',
        'dispatchMember' => 'Spinen\ConnectWise\Models\v2019_2\Service\MemberReference',
        'serviceManagerMember' => 'Spinen\ConnectWise\Models\v2019_2\Service\MemberReference',
        'dutyManagerMember' => 'Spinen\ConnectWise\Models\v2019_2\Service\MemberReference',
        'oncallMember' => 'Spinen\ConnectWise\Models\v2019_2\Service\MemberReference',
        'workRole' => 'Spinen\ConnectWise\Models\v2019_2\Service\WorkRoleReference',
        'workType' => 'Spinen\ConnectWise\Models\v2019_2\Service\WorkTypeReference',
        'billTime' => 'string',
        'billExpense' => 'string',
        'billProduct' => 'string',
        'autoCloseStatus' => 'Spinen\ConnectWise\Models\v2019_2\Service\ServiceStatusReference',
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
        'emailConnectorReopenStatus' => 'Spinen\ConnectWise\Models\v2019_2\Service\ServiceStatusReference',
        'emailConnectorReopenResourcesFlag' => 'boolean',
        'emailConnectorNewTicketNoMatchFlag' => 'boolean',
        'emailConnectorNeverReopenByDaysFlag' => 'boolean',
        'emailConnectorReopenDaysLimit' => 'integer',
        'emailConnectorNeverReopenByDaysClosedFlag' => 'boolean',
        'emailConnectorReopenDaysClosedLimit' => 'integer',
        'useMemberDisplayNameFlag' => 'boolean',
        'sendToCCFlag' => 'boolean',
        'autoAssignTicketOwnerFlag' => 'boolean',
        'closedLoopAllFlag' => 'boolean',
        'percentageCalculation' => 'string',
        'allSort' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Service\Metadata',
    ];
}
