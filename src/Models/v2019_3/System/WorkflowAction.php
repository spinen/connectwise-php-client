<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkflowAction Version v2019_3
 * 
 * Model for WorkflowAction
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_3\System\NotifyTypeReference $notifyType
 * @property Spinen\ConnectWise\Models\v2019_3\System\NotificationRecipientReference $notifyWho
 * @property Spinen\ConnectWise\Models\v2019_3\System\MemberReference $specificMemberTo
 * @property string $emailRecipient
 * @property Spinen\ConnectWise\Models\v2019_3\System\NotificationRecipientReference $notifyFrom
 * @property Spinen\ConnectWise\Models\v2019_3\System\MemberReference $specificMemberFrom
 * @property string $emailFrom
 * @property Spinen\ConnectWise\Models\v2019_3\System\ContactReference $ccContact
 * @property Spinen\ConnectWise\Models\v2019_3\System\ContactReference $bccContact
 * @property string $subject
 * @property string $notes
 * @property Spinen\ConnectWise\Models\v2019_3\System\ActivityStatusReference $activityStatus
 * @property Spinen\ConnectWise\Models\v2019_3\System\ActivityTypeReference $activityType
 * @property Spinen\ConnectWise\Models\v2019_3\System\TrackReference $attachedTrack
 * @property integer $daysToExecute
 * @property Spinen\ConnectWise\Models\v2019_3\System\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2019_3\System\ServiceStatusReference $boardStatus
 * @property Spinen\ConnectWise\Models\v2019_3\System\ServiceTypeReference $serviceType
 * @property Spinen\ConnectWise\Models\v2019_3\System\GroupReference $group
 * @property Spinen\ConnectWise\Models\v2019_3\System\ServiceTemplateReference $serviceTemplate
 * @property integer $invoiceMinDays
 * @property Spinen\ConnectWise\Models\v2019_3\System\AutomateScriptReference $automateScript
 * @property Spinen\ConnectWise\Models\v2019_3\System\ServiceStatusReference $scriptSuccessStatus
 * @property Spinen\ConnectWise\Models\v2019_3\System\ServiceStatusReference $scriptFailStatus
 * @property boolean $detailNotesFlag
 * @property boolean $internalNotesFlag
 * @property boolean $auditNotesFlag
 * @property Spinen\ConnectWise\Models\v2019_3\System\PriorityReference $servicePriority
 * @property boolean $updateOwnerFlag
 * @property Spinen\ConnectWise\Models\v2019_3\System\OrderStatusReference $salesOrderStatus
 * @property Spinen\ConnectWise\Models\v2019_3\System\ProjectStatusReference $projectStatus
 * @property Spinen\ConnectWise\Models\v2019_3\System\CompanyStatusReference $companyStatus
 * @property array $attachments
 * @property Spinen\ConnectWise\Models\v2019_3\System\ServiceSurveyReference $serviceSurvey
 * @property Spinen\ConnectWise\Models\v2019_3\System\GenericBoardTeamReference $specificTeamTo
 * @property Spinen\ConnectWise\Models\v2019_3\System\Metadata $_info
 */
class WorkflowAction extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'notifyType' => 'Spinen\ConnectWise\Models\v2019_3\System\NotifyTypeReference',
        'notifyWho' => 'Spinen\ConnectWise\Models\v2019_3\System\NotificationRecipientReference',
        'specificMemberTo' => 'Spinen\ConnectWise\Models\v2019_3\System\MemberReference',
        'emailRecipient' => 'string',
        'notifyFrom' => 'Spinen\ConnectWise\Models\v2019_3\System\NotificationRecipientReference',
        'specificMemberFrom' => 'Spinen\ConnectWise\Models\v2019_3\System\MemberReference',
        'emailFrom' => 'string',
        'ccContact' => 'Spinen\ConnectWise\Models\v2019_3\System\ContactReference',
        'bccContact' => 'Spinen\ConnectWise\Models\v2019_3\System\ContactReference',
        'subject' => 'string',
        'notes' => 'string',
        'activityStatus' => 'Spinen\ConnectWise\Models\v2019_3\System\ActivityStatusReference',
        'activityType' => 'Spinen\ConnectWise\Models\v2019_3\System\ActivityTypeReference',
        'attachedTrack' => 'Spinen\ConnectWise\Models\v2019_3\System\TrackReference',
        'daysToExecute' => 'integer',
        'board' => 'Spinen\ConnectWise\Models\v2019_3\System\BoardReference',
        'boardStatus' => 'Spinen\ConnectWise\Models\v2019_3\System\ServiceStatusReference',
        'serviceType' => 'Spinen\ConnectWise\Models\v2019_3\System\ServiceTypeReference',
        'group' => 'Spinen\ConnectWise\Models\v2019_3\System\GroupReference',
        'serviceTemplate' => 'Spinen\ConnectWise\Models\v2019_3\System\ServiceTemplateReference',
        'invoiceMinDays' => 'integer',
        'automateScript' => 'Spinen\ConnectWise\Models\v2019_3\System\AutomateScriptReference',
        'scriptSuccessStatus' => 'Spinen\ConnectWise\Models\v2019_3\System\ServiceStatusReference',
        'scriptFailStatus' => 'Spinen\ConnectWise\Models\v2019_3\System\ServiceStatusReference',
        'detailNotesFlag' => 'boolean',
        'internalNotesFlag' => 'boolean',
        'auditNotesFlag' => 'boolean',
        'servicePriority' => 'Spinen\ConnectWise\Models\v2019_3\System\PriorityReference',
        'updateOwnerFlag' => 'boolean',
        'salesOrderStatus' => 'Spinen\ConnectWise\Models\v2019_3\System\OrderStatusReference',
        'projectStatus' => 'Spinen\ConnectWise\Models\v2019_3\System\ProjectStatusReference',
        'companyStatus' => 'Spinen\ConnectWise\Models\v2019_3\System\CompanyStatusReference',
        'attachments' => 'array',
        'serviceSurvey' => 'Spinen\ConnectWise\Models\v2019_3\System\ServiceSurveyReference',
        'specificTeamTo' => 'Spinen\ConnectWise\Models\v2019_3\System\GenericBoardTeamReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\System\Metadata',
    ];
}
