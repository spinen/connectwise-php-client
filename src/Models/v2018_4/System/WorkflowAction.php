<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkflowAction Version v2018_4
 *
 * Model for WorkflowAction
 *
 * @property Spinen\ConnectWise\Models\v2018_4\System\ActivityStatusReference $activityStatus
 * @property Spinen\ConnectWise\Models\v2018_4\System\ActivityTypeReference $activityType
 * @property Spinen\ConnectWise\Models\v2018_4\System\AutomateScriptReference $automateScript
 * @property Spinen\ConnectWise\Models\v2018_4\System\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2018_4\System\CompanyStatusReference $companyStatus
 * @property Spinen\ConnectWise\Models\v2018_4\System\ContactReference $bccContact
 * @property Spinen\ConnectWise\Models\v2018_4\System\ContactReference $ccContact
 * @property Spinen\ConnectWise\Models\v2018_4\System\GroupReference $group
 * @property Spinen\ConnectWise\Models\v2018_4\System\MemberReference $specificMemberFrom
 * @property Spinen\ConnectWise\Models\v2018_4\System\MemberReference $specificMemberTo
 * @property Spinen\ConnectWise\Models\v2018_4\System\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_4\System\NotificationRecipientReference $notifyFrom
 * @property Spinen\ConnectWise\Models\v2018_4\System\NotificationRecipientReference $notifyWho
 * @property Spinen\ConnectWise\Models\v2018_4\System\NotifyTypeReference $notifyType
 * @property Spinen\ConnectWise\Models\v2018_4\System\OrderStatusReference $salesOrderStatus
 * @property Spinen\ConnectWise\Models\v2018_4\System\PriorityReference $servicePriority
 * @property Spinen\ConnectWise\Models\v2018_4\System\ProjectStatusReference $projectStatus
 * @property Spinen\ConnectWise\Models\v2018_4\System\ServiceStatusReference $boardStatus
 * @property Spinen\ConnectWise\Models\v2018_4\System\ServiceStatusReference $scriptFailStatus
 * @property Spinen\ConnectWise\Models\v2018_4\System\ServiceStatusReference $scriptSuccessStatus
 * @property Spinen\ConnectWise\Models\v2018_4\System\ServiceTemplateReference $serviceTemplate
 * @property Spinen\ConnectWise\Models\v2018_4\System\ServiceTypeReference $serviceType
 * @property Spinen\ConnectWise\Models\v2018_4\System\TrackReference $attachedTrack
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\System\Metadata',
        'activityStatus' => 'Spinen\ConnectWise\Models\v2018_4\System\ActivityStatusReference',
        'activityType' => 'Spinen\ConnectWise\Models\v2018_4\System\ActivityTypeReference',
        'attachedTrack' => 'Spinen\ConnectWise\Models\v2018_4\System\TrackReference',
        'attachments' => 'array',
        'auditNotesFlag' => 'boolean',
        'automateScript' => 'Spinen\ConnectWise\Models\v2018_4\System\AutomateScriptReference',
        'bccContact' => 'Spinen\ConnectWise\Models\v2018_4\System\ContactReference',
        'board' => 'Spinen\ConnectWise\Models\v2018_4\System\BoardReference',
        'boardStatus' => 'Spinen\ConnectWise\Models\v2018_4\System\ServiceStatusReference',
        'ccContact' => 'Spinen\ConnectWise\Models\v2018_4\System\ContactReference',
        'companyStatus' => 'Spinen\ConnectWise\Models\v2018_4\System\CompanyStatusReference',
        'daysToExecute' => 'integer',
        'detailNotesFlag' => 'boolean',
        'emailFrom' => 'string',
        'emailRecipient' => 'string',
        'group' => 'Spinen\ConnectWise\Models\v2018_4\System\GroupReference',
        'id' => 'integer',
        'internalNotesFlag' => 'boolean',
        'invoiceMinDays' => 'integer',
        'notes' => 'string',
        'notifyFrom' => 'Spinen\ConnectWise\Models\v2018_4\System\NotificationRecipientReference',
        'notifyType' => 'Spinen\ConnectWise\Models\v2018_4\System\NotifyTypeReference',
        'notifyWho' => 'Spinen\ConnectWise\Models\v2018_4\System\NotificationRecipientReference',
        'projectStatus' => 'Spinen\ConnectWise\Models\v2018_4\System\ProjectStatusReference',
        'salesOrderStatus' => 'Spinen\ConnectWise\Models\v2018_4\System\OrderStatusReference',
        'scriptFailStatus' => 'Spinen\ConnectWise\Models\v2018_4\System\ServiceStatusReference',
        'scriptSuccessStatus' => 'Spinen\ConnectWise\Models\v2018_4\System\ServiceStatusReference',
        'servicePriority' => 'Spinen\ConnectWise\Models\v2018_4\System\PriorityReference',
        'serviceTemplate' => 'Spinen\ConnectWise\Models\v2018_4\System\ServiceTemplateReference',
        'serviceType' => 'Spinen\ConnectWise\Models\v2018_4\System\ServiceTypeReference',
        'specificMemberFrom' => 'Spinen\ConnectWise\Models\v2018_4\System\MemberReference',
        'specificMemberTo' => 'Spinen\ConnectWise\Models\v2018_4\System\MemberReference',
        'subject' => 'string',
        'updateOwnerFlag' => 'boolean',
    ];
}
