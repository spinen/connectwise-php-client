<?php

namespace Spinen\ConnectWise\Models\v2019_4\Company;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ManagementReportNotification Version v2019_4
 *
 * Model for ManagementReportNotification
 *
 * @property CompanyReference $company
 * @property MemberReference $member
 * @property Metadata $_info
 * @property NotificationRecipientReference $notifyWho
 * @property boolean $globalFlag
 * @property integer $id
 * @property string $email
 */
class ManagementReportNotification extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'company' => CompanyReference::class,
        'email' => 'string',
        'globalFlag' => 'boolean',
        'id' => 'integer',
        'member' => MemberReference::class,
        'notifyWho' => NotificationRecipientReference::class
    ];
}
