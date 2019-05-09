<?php

namespace Spinen\ConnectWise\Models\v2019_2\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TrackAction Version v2019_2
 * 
 * Model for TrackAction
 *
 * @property integer $id
 * @property string $notifyType
 * @property Spinen\ConnectWise\Models\v2019_2\Company\ServiceTemplateReference $serviceTemplate
 * @property Spinen\ConnectWise\Models\v2019_2\Company\MemberReference $specificMemberTo
 * @property string $emailRecipient
 * @property Spinen\ConnectWise\Models\v2019_2\Company\MemberReference $specificMemberFrom
 * @property string $emailFrom
 * @property string $subject
 * @property string $notes
 * @property Spinen\ConnectWise\Models\v2019_2\Company\ActivityTypeReference $activityType
 * @property Spinen\ConnectWise\Models\v2019_2\Company\ActivityStatusReference $activityStatus
 * @property Spinen\ConnectWise\Models\v2019_2\Company\CompanyStatusReference $companyStatus
 * @property Spinen\ConnectWise\Models\v2019_2\Company\TrackReference $track
 * @property Spinen\ConnectWise\Models\v2019_2\Company\TrackReference $attachedTrack
 * @property Spinen\ConnectWise\Models\v2019_2\Company\GroupReference $group
 * @property Spinen\ConnectWise\Models\v2019_2\Company\ContactReference $ccContact
 * @property Spinen\ConnectWise\Models\v2019_2\Company\ContactReference $bccContact
 * @property integer $daysToExecute
 * @property Spinen\ConnectWise\Models\v2019_2\Company\NotificationRecipientReference $notifyWho
 * @property Spinen\ConnectWise\Models\v2019_2\Company\NotificationRecipientReference $notifyFrom
 * @property Spinen\ConnectWise\Models\v2019_2\Company\Metadata $_info
 */
class TrackAction extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'notifyType' => 'string',
        'serviceTemplate' => 'Spinen\ConnectWise\Models\v2019_2\Company\ServiceTemplateReference',
        'specificMemberTo' => 'Spinen\ConnectWise\Models\v2019_2\Company\MemberReference',
        'emailRecipient' => 'string',
        'specificMemberFrom' => 'Spinen\ConnectWise\Models\v2019_2\Company\MemberReference',
        'emailFrom' => 'string',
        'subject' => 'string',
        'notes' => 'string',
        'activityType' => 'Spinen\ConnectWise\Models\v2019_2\Company\ActivityTypeReference',
        'activityStatus' => 'Spinen\ConnectWise\Models\v2019_2\Company\ActivityStatusReference',
        'companyStatus' => 'Spinen\ConnectWise\Models\v2019_2\Company\CompanyStatusReference',
        'track' => 'Spinen\ConnectWise\Models\v2019_2\Company\TrackReference',
        'attachedTrack' => 'Spinen\ConnectWise\Models\v2019_2\Company\TrackReference',
        'group' => 'Spinen\ConnectWise\Models\v2019_2\Company\GroupReference',
        'ccContact' => 'Spinen\ConnectWise\Models\v2019_2\Company\ContactReference',
        'bccContact' => 'Spinen\ConnectWise\Models\v2019_2\Company\ContactReference',
        'daysToExecute' => 'integer',
        'notifyWho' => 'Spinen\ConnectWise\Models\v2019_2\Company\NotificationRecipientReference',
        'notifyFrom' => 'Spinen\ConnectWise\Models\v2019_2\Company\NotificationRecipientReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Company\Metadata',
    ];
}
