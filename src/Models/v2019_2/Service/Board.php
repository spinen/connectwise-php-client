<?php

namespace Spinen\ConnectWise\Models\v2019_2\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Board Version v2019_2
 *
 * Model for Board
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Service\DocumentReference $boardIcon
 * @property Spinen\ConnectWise\Models\v2019_2\Service\MemberReference $dispatchMember
 * @property Spinen\ConnectWise\Models\v2019_2\Service\MemberReference $dutyManagerMember
 * @property Spinen\ConnectWise\Models\v2019_2\Service\MemberReference $oncallMember
 * @property Spinen\ConnectWise\Models\v2019_2\Service\MemberReference $serviceManagerMember
 * @property Spinen\ConnectWise\Models\v2019_2\Service\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_2\Service\ServiceEmailTemplateReference $contactTemplate
 * @property Spinen\ConnectWise\Models\v2019_2\Service\ServiceEmailTemplateReference $resourceTemplate
 * @property Spinen\ConnectWise\Models\v2019_2\Service\ServiceSignoffReference $signOffTemplate
 * @property Spinen\ConnectWise\Models\v2019_2\Service\ServiceStatusReference $autoCloseStatus
 * @property Spinen\ConnectWise\Models\v2019_2\Service\ServiceStatusReference $emailConnectorReopenStatus
 * @property Spinen\ConnectWise\Models\v2019_2\Service\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2019_2\Service\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2019_2\Service\WorkRoleReference $workRole
 * @property Spinen\ConnectWise\Models\v2019_2\Service\WorkTypeReference $workType
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
 * @property boolean $emailConnectorNeverReopenByDaysClosedFlag
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
 * @property integer $emailConnectorReopenDaysClosedLimit
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Service\Metadata',
        'allSort' => 'string',
        'autoAssignNewECTicketsFlag' => 'boolean',
        'autoAssignNewPortalTicketsFlag' => 'boolean',
        'autoAssignNewTicketsFlag' => 'boolean',
        'autoAssignTicketOwnerFlag' => 'boolean',
        'autoCloseStatus' => 'Spinen\ConnectWise\Models\v2019_2\Service\ServiceStatusReference',
        'billExpense' => 'string',
        'billProduct' => 'string',
        'billTicketSeparatelyFlag' => 'boolean',
        'billTicketsAfterClosedFlag' => 'boolean',
        'billTime' => 'string',
        'billUnapprovedTimeExpenseFlag' => 'boolean',
        'boardIcon' => 'Spinen\ConnectWise\Models\v2019_2\Service\DocumentReference',
        'closedLoopAllFlag' => 'boolean',
        'closedLoopDiscussionsFlag' => 'boolean',
        'closedLoopInternalAnalysisFlag' => 'boolean',
        'closedLoopResolutionFlag' => 'boolean',
        'contactTemplate' => 'Spinen\ConnectWise\Models\v2019_2\Service\ServiceEmailTemplateReference',
        'department' => 'Spinen\ConnectWise\Models\v2019_2\Service\SystemDepartmentReference',
        'discussionsLockedFlag' => 'boolean',
        'dispatchMember' => 'Spinen\ConnectWise\Models\v2019_2\Service\MemberReference',
        'dutyManagerMember' => 'Spinen\ConnectWise\Models\v2019_2\Service\MemberReference',
        'emailConnectorAllowReopenClosedFlag' => 'boolean',
        'emailConnectorNeverReopenByDaysClosedFlag' => 'boolean',
        'emailConnectorNeverReopenByDaysFlag' => 'boolean',
        'emailConnectorNewTicketNoMatchFlag' => 'boolean',
        'emailConnectorReopenDaysClosedLimit' => 'integer',
        'emailConnectorReopenDaysLimit' => 'integer',
        'emailConnectorReopenResourcesFlag' => 'boolean',
        'emailConnectorReopenStatus' => 'Spinen\ConnectWise\Models\v2019_2\Service\ServiceStatusReference',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'internalAnalysisSort' => 'string',
        'location' => 'Spinen\ConnectWise\Models\v2019_2\Service\SystemLocationReference',
        'name' => 'string',
        'notifyEmailFrom' => 'string',
        'notifyEmailFromName' => 'string',
        'oncallMember' => 'Spinen\ConnectWise\Models\v2019_2\Service\MemberReference',
        'overrideBillingSetupFlag' => 'boolean',
        'percentageCalculation' => 'string',
        'problemSort' => 'string',
        'projectFlag' => 'boolean',
        'resolutionSort' => 'string',
        'resourceTemplate' => 'Spinen\ConnectWise\Models\v2019_2\Service\ServiceEmailTemplateReference',
        'sendToCCFlag' => 'boolean',
        'sendToContactFlag' => 'boolean',
        'sendToResourceFlag' => 'boolean',
        'serviceManagerMember' => 'Spinen\ConnectWise\Models\v2019_2\Service\MemberReference',
        'showDependenciesFlag' => 'boolean',
        'showEstimatesFlag' => 'boolean',
        'signOffTemplate' => 'Spinen\ConnectWise\Models\v2019_2\Service\ServiceSignoffReference',
        'timeEntryDiscussionFlag' => 'boolean',
        'timeEntryInternalAnalysisFlag' => 'boolean',
        'timeEntryLockedFlag' => 'boolean',
        'timeEntryResolutionFlag' => 'boolean',
        'useMemberDisplayNameFlag' => 'boolean',
        'workRole' => 'Spinen\ConnectWise\Models\v2019_2\Service\WorkRoleReference',
        'workType' => 'Spinen\ConnectWise\Models\v2019_2\Service\WorkTypeReference',
    ];
}
