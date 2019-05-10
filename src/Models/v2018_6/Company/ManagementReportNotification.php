<?php

namespace Spinen\ConnectWise\Models\v2018_6\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ManagementReportNotification Version v2018_6
 *
 * Model for ManagementReportNotification
 *
 * @property Spinen\ConnectWise\Models\v2018_6\Company\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2018_6\Company\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_6\Company\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_6\Company\NotificationRecipientReference $notifyWho
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Company\Metadata',
        'company' => 'Spinen\ConnectWise\Models\v2018_6\Company\CompanyReference',
        'email' => 'string',
        'globalFlag' => 'boolean',
        'id' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2018_6\Company\MemberReference',
        'notifyWho' => 'Spinen\ConnectWise\Models\v2018_6\Company\NotificationRecipientReference',
    ];
}
