<?php

namespace Spinen\ConnectWise\Models\v2018_4\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TrackAction Version v2018_4
 *
 * Model for TrackAction
 *
 * @property ActivityStatusReference $activityStatus
 * @property ActivityTypeReference $activityType
 * @property CompanyStatusReference $companyStatus
 * @property ContactReference $bccContact
 * @property ContactReference $ccContact
 * @property GroupReference $group
 * @property MemberReference $specificMemberFrom
 * @property MemberReference $specificMemberTo
 * @property Metadata $_info
 * @property NotificationRecipientReference $notifyFrom
 * @property NotificationRecipientReference $notifyWho
 * @property ServiceTemplateReference $serviceTemplate
 * @property TrackReference $track
 * @property integer $daysToExecute
 * @property integer $id
 * @property string $emailFrom
 * @property string $emailRecipient
 * @property string $notes
 * @property string $notifyType
 * @property string $subject
 */
class TrackAction extends Model
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
        'bccContact' => ContactReference::class,
        'ccContact' => ContactReference::class,
        'companyStatus' => CompanyStatusReference::class,
        'daysToExecute' => 'integer',
        'emailFrom' => 'string',
        'emailRecipient' => 'string',
        'group' => GroupReference::class,
        'id' => 'integer',
        'notes' => 'string',
        'notifyFrom' => NotificationRecipientReference::class,
        'notifyType' => 'string',
        'notifyWho' => NotificationRecipientReference::class,
        'serviceTemplate' => ServiceTemplateReference::class,
        'specificMemberFrom' => MemberReference::class,
        'specificMemberTo' => MemberReference::class,
        'subject' => 'string',
        'track' => TrackReference::class,
    ];
}
