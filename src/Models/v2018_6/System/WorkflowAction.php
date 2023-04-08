<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkflowAction Version v2018_6
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
 * @property ServiceTemplateReference $serviceTemplate
 * @property ServiceTypeReference $serviceType
 * @property TrackReference $attachedTrack
 * @property array $attachments
 * @property bool $auditNotesFlag
 * @property bool $detailNotesFlag
 * @property bool $internalNotesFlag
 * @property bool $updateOwnerFlag
 * @property int $daysToExecute
 * @property int $id
 * @property int $invoiceMinDays
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
        'serviceTemplate' => ServiceTemplateReference::class,
        'serviceType' => ServiceTypeReference::class,
        'specificMemberFrom' => MemberReference::class,
        'specificMemberTo' => MemberReference::class,
        'specificTeamTo' => GenericBoardTeamReference::class,
        'subject' => 'string',
        'updateOwnerFlag' => 'boolean',
    ];
}
