<?php

namespace Spinen\ConnectWise\Models\v2019_5\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkflowAction Version v2019_5
 *
 * Model for WorkflowAction
 *
 * @property ActivityStatusReference $activityStatus
 * @property ActivityTypeReference $activityType
 * @property AutomateScriptReference $automateScript
 * @property BoardReference $board
 * @property CompanyStatusReference $companyStatus
 * @property ContactReference $bccContact
 * @property ContactReference $ccContact
 * @property GenericBoardTeamReference $specificTeamTo
 * @property GroupReference $group
 * @property MemberReference $specificMemberFrom
 * @property MemberReference $specificMemberTo
 * @property Metadata $_info
 * @property NotificationRecipientReference $notifyFrom
 * @property NotificationRecipientReference $notifyWho
 * @property NotifyTypeReference $notifyType
 * @property OrderStatusReference $salesOrderStatus
 * @property PriorityReference $servicePriority
 * @property ProjectStatusReference $projectStatus
 * @property ServiceStatusReference $boardStatus
 * @property ServiceStatusReference $scriptFailStatus
 * @property ServiceStatusReference $scriptSuccessStatus
 * @property ServiceSurveyReference $serviceSurvey
 * @property ServiceTemplateReference $serviceTemplate
 * @property ServiceTypeReference $serviceType
 * @property TrackReference $attachedTrack
 * @property array $attachments
 * @property boolean $auditNotesFlag
 * @property boolean $detailNotesFlag
 * @property boolean $internalNotesFlag
 * @property boolean $updateOwnerFlag
 * @property integer $daysToExecute
 * @property integer $id
 * @property integer $invoiceMinDays
 * @property string $emailFrom
 * @property string $emailRecipient
 * @property string $notes
 * @property string $subject
 */
class WorkflowAction extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'activityStatus' => ActivityStatusReference::class,
        'activityType' => ActivityTypeReference::class,
        'attachedTrack' => TrackReference::class,
        'attachments' => 'array',
        'auditNotesFlag' => 'boolean',
        'automateScript' => AutomateScriptReference::class,
        'bccContact' => ContactReference::class,
        'board' => BoardReference::class,
        'boardStatus' => ServiceStatusReference::class,
        'ccContact' => ContactReference::class,
        'companyStatus' => CompanyStatusReference::class,
        'daysToExecute' => 'integer',
        'detailNotesFlag' => 'boolean',
        'emailFrom' => 'string',
        'emailRecipient' => 'string',
        'group' => GroupReference::class,
        'id' => 'integer',
        'internalNotesFlag' => 'boolean',
        'invoiceMinDays' => 'integer',
        'notes' => 'string',
        'notifyFrom' => NotificationRecipientReference::class,
        'notifyType' => NotifyTypeReference::class,
        'notifyWho' => NotificationRecipientReference::class,
        'projectStatus' => ProjectStatusReference::class,
        'salesOrderStatus' => OrderStatusReference::class,
        'scriptFailStatus' => ServiceStatusReference::class,
        'scriptSuccessStatus' => ServiceStatusReference::class,
        'servicePriority' => PriorityReference::class,
        'serviceSurvey' => ServiceSurveyReference::class,
        'serviceTemplate' => ServiceTemplateReference::class,
        'serviceType' => ServiceTypeReference::class,
        'specificMemberFrom' => MemberReference::class,
        'specificMemberTo' => MemberReference::class,
        'specificTeamTo' => GenericBoardTeamReference::class,
        'subject' => 'string',
        'updateOwnerFlag' => 'boolean'
    ];
}
