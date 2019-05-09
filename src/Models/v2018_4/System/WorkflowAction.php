<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkflowAction Version v2018_4
 * 
 * Model for WorkflowAction
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_4\System\NotifyTypeReference $notifyType
 * @property Spinen\ConnectWise\Models\v2018_4\System\NotificationRecipientReference $notifyWho
 * @property Spinen\ConnectWise\Models\v2018_4\System\MemberReference $specificMemberTo
 * @property string $emailRecipient
 * @property Spinen\ConnectWise\Models\v2018_4\System\NotificationRecipientReference $notifyFrom
 * @property Spinen\ConnectWise\Models\v2018_4\System\MemberReference $specificMemberFrom
 * @property string $emailFrom
 * @property Spinen\ConnectWise\Models\v2018_4\System\ContactReference $ccContact
 * @property Spinen\ConnectWise\Models\v2018_4\System\ContactReference $bccContact
 * @property string $subject
 * @property string $notes
 * @property Spinen\ConnectWise\Models\v2018_4\System\ActivityStatusReference $activityStatus
 * @property Spinen\ConnectWise\Models\v2018_4\System\ActivityTypeReference $activityType
 * @property Spinen\ConnectWise\Models\v2018_4\System\TrackReference $attachedTrack
 * @property integer $daysToExecute
 * @property Spinen\ConnectWise\Models\v2018_4\System\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2018_4\System\ServiceStatusReference $boardStatus
 * @property Spinen\ConnectWise\Models\v2018_4\System\ServiceTypeReference $serviceType
 * @property Spinen\ConnectWise\Models\v2018_4\System\GroupReference $group
 * @property Spinen\ConnectWise\Models\v2018_4\System\ServiceTemplateReference $serviceTemplate
 * @property integer $invoiceMinDays
 * @property Spinen\ConnectWise\Models\v2018_4\System\AutomateScriptReference $automateScript
 * @property Spinen\ConnectWise\Models\v2018_4\System\ServiceStatusReference $scriptSuccessStatus
 * @property Spinen\ConnectWise\Models\v2018_4\System\ServiceStatusReference $scriptFailStatus
 * @property boolean $detailNotesFlag
 * @property boolean $internalNotesFlag
 * @property boolean $auditNotesFlag
 * @property Spinen\ConnectWise\Models\v2018_4\System\PriorityReference $servicePriority
 * @property boolean $updateOwnerFlag
 * @property Spinen\ConnectWise\Models\v2018_4\System\OrderStatusReference $salesOrderStatus
 * @property Spinen\ConnectWise\Models\v2018_4\System\ProjectStatusReference $projectStatus
 * @property Spinen\ConnectWise\Models\v2018_4\System\CompanyStatusReference $companyStatus
 * @property array $attachments
 * @property Spinen\ConnectWise\Models\v2018_4\System\Metadata $_info
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
        'notifyType' => 'Spinen\ConnectWise\Models\v2018_4\System\NotifyTypeReference',
        'notifyWho' => 'Spinen\ConnectWise\Models\v2018_4\System\NotificationRecipientReference',
        'specificMemberTo' => 'Spinen\ConnectWise\Models\v2018_4\System\MemberReference',
        'emailRecipient' => 'string',
        'notifyFrom' => 'Spinen\ConnectWise\Models\v2018_4\System\NotificationRecipientReference',
        'specificMemberFrom' => 'Spinen\ConnectWise\Models\v2018_4\System\MemberReference',
        'emailFrom' => 'string',
        'ccContact' => 'Spinen\ConnectWise\Models\v2018_4\System\ContactReference',
        'bccContact' => 'Spinen\ConnectWise\Models\v2018_4\System\ContactReference',
        'subject' => 'string',
        'notes' => 'string',
        'activityStatus' => 'Spinen\ConnectWise\Models\v2018_4\System\ActivityStatusReference',
        'activityType' => 'Spinen\ConnectWise\Models\v2018_4\System\ActivityTypeReference',
        'attachedTrack' => 'Spinen\ConnectWise\Models\v2018_4\System\TrackReference',
        'daysToExecute' => 'integer',
        'board' => 'Spinen\ConnectWise\Models\v2018_4\System\BoardReference',
        'boardStatus' => 'Spinen\ConnectWise\Models\v2018_4\System\ServiceStatusReference',
        'serviceType' => 'Spinen\ConnectWise\Models\v2018_4\System\ServiceTypeReference',
        'group' => 'Spinen\ConnectWise\Models\v2018_4\System\GroupReference',
        'serviceTemplate' => 'Spinen\ConnectWise\Models\v2018_4\System\ServiceTemplateReference',
        'invoiceMinDays' => 'integer',
        'automateScript' => 'Spinen\ConnectWise\Models\v2018_4\System\AutomateScriptReference',
        'scriptSuccessStatus' => 'Spinen\ConnectWise\Models\v2018_4\System\ServiceStatusReference',
        'scriptFailStatus' => 'Spinen\ConnectWise\Models\v2018_4\System\ServiceStatusReference',
        'detailNotesFlag' => 'boolean',
        'internalNotesFlag' => 'boolean',
        'auditNotesFlag' => 'boolean',
        'servicePriority' => 'Spinen\ConnectWise\Models\v2018_4\System\PriorityReference',
        'updateOwnerFlag' => 'boolean',
        'salesOrderStatus' => 'Spinen\ConnectWise\Models\v2018_4\System\OrderStatusReference',
        'projectStatus' => 'Spinen\ConnectWise\Models\v2018_4\System\ProjectStatusReference',
        'companyStatus' => 'Spinen\ConnectWise\Models\v2018_4\System\CompanyStatusReference',
        'attachments' => 'array',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\System\Metadata',
    ];
}
