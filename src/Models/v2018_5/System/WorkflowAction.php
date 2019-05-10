<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkflowAction Version v2018_5
 *
 * Model for WorkflowAction
 *
 * @property Spinen\ConnectWise\Models\v2018_5\System\ActivityStatusReference $activityStatus
 * @property Spinen\ConnectWise\Models\v2018_5\System\ActivityTypeReference $activityType
 * @property Spinen\ConnectWise\Models\v2018_5\System\AutomateScriptReference $automateScript
 * @property Spinen\ConnectWise\Models\v2018_5\System\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2018_5\System\CompanyStatusReference $companyStatus
 * @property Spinen\ConnectWise\Models\v2018_5\System\ContactReference $bccContact
 * @property Spinen\ConnectWise\Models\v2018_5\System\ContactReference $ccContact
 * @property Spinen\ConnectWise\Models\v2018_5\System\GroupReference $group
 * @property Spinen\ConnectWise\Models\v2018_5\System\MemberReference $specificMemberFrom
 * @property Spinen\ConnectWise\Models\v2018_5\System\MemberReference $specificMemberTo
 * @property Spinen\ConnectWise\Models\v2018_5\System\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_5\System\NotificationRecipientReference $notifyFrom
 * @property Spinen\ConnectWise\Models\v2018_5\System\NotificationRecipientReference $notifyWho
 * @property Spinen\ConnectWise\Models\v2018_5\System\NotifyTypeReference $notifyType
 * @property Spinen\ConnectWise\Models\v2018_5\System\OrderStatusReference $salesOrderStatus
 * @property Spinen\ConnectWise\Models\v2018_5\System\PriorityReference $servicePriority
 * @property Spinen\ConnectWise\Models\v2018_5\System\ProjectStatusReference $projectStatus
 * @property Spinen\ConnectWise\Models\v2018_5\System\ServiceStatusReference $boardStatus
 * @property Spinen\ConnectWise\Models\v2018_5\System\ServiceStatusReference $scriptFailStatus
 * @property Spinen\ConnectWise\Models\v2018_5\System\ServiceStatusReference $scriptSuccessStatus
 * @property Spinen\ConnectWise\Models\v2018_5\System\ServiceTemplateReference $serviceTemplate
 * @property Spinen\ConnectWise\Models\v2018_5\System\ServiceTypeReference $serviceType
 * @property Spinen\ConnectWise\Models\v2018_5\System\TrackReference $attachedTrack
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\System\Metadata',
        'activityStatus' => 'Spinen\ConnectWise\Models\v2018_5\System\ActivityStatusReference',
        'activityType' => 'Spinen\ConnectWise\Models\v2018_5\System\ActivityTypeReference',
        'attachedTrack' => 'Spinen\ConnectWise\Models\v2018_5\System\TrackReference',
        'attachments' => 'array',
        'auditNotesFlag' => 'boolean',
        'automateScript' => 'Spinen\ConnectWise\Models\v2018_5\System\AutomateScriptReference',
        'bccContact' => 'Spinen\ConnectWise\Models\v2018_5\System\ContactReference',
        'board' => 'Spinen\ConnectWise\Models\v2018_5\System\BoardReference',
        'boardStatus' => 'Spinen\ConnectWise\Models\v2018_5\System\ServiceStatusReference',
        'ccContact' => 'Spinen\ConnectWise\Models\v2018_5\System\ContactReference',
        'companyStatus' => 'Spinen\ConnectWise\Models\v2018_5\System\CompanyStatusReference',
        'daysToExecute' => 'integer',
        'detailNotesFlag' => 'boolean',
        'emailFrom' => 'string',
        'emailRecipient' => 'string',
        'group' => 'Spinen\ConnectWise\Models\v2018_5\System\GroupReference',
        'id' => 'integer',
        'internalNotesFlag' => 'boolean',
        'invoiceMinDays' => 'integer',
        'notes' => 'string',
        'notifyFrom' => 'Spinen\ConnectWise\Models\v2018_5\System\NotificationRecipientReference',
        'notifyType' => 'Spinen\ConnectWise\Models\v2018_5\System\NotifyTypeReference',
        'notifyWho' => 'Spinen\ConnectWise\Models\v2018_5\System\NotificationRecipientReference',
        'projectStatus' => 'Spinen\ConnectWise\Models\v2018_5\System\ProjectStatusReference',
        'salesOrderStatus' => 'Spinen\ConnectWise\Models\v2018_5\System\OrderStatusReference',
        'scriptFailStatus' => 'Spinen\ConnectWise\Models\v2018_5\System\ServiceStatusReference',
        'scriptSuccessStatus' => 'Spinen\ConnectWise\Models\v2018_5\System\ServiceStatusReference',
        'servicePriority' => 'Spinen\ConnectWise\Models\v2018_5\System\PriorityReference',
        'serviceTemplate' => 'Spinen\ConnectWise\Models\v2018_5\System\ServiceTemplateReference',
        'serviceType' => 'Spinen\ConnectWise\Models\v2018_5\System\ServiceTypeReference',
        'specificMemberFrom' => 'Spinen\ConnectWise\Models\v2018_5\System\MemberReference',
        'specificMemberTo' => 'Spinen\ConnectWise\Models\v2018_5\System\MemberReference',
        'subject' => 'string',
        'updateOwnerFlag' => 'boolean',
    ];
}
