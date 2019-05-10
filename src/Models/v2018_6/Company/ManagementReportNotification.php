<?php

namespace Spinen\ConnectWise\Models\v2018_6\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ManagementReportNotification Version v2018_6
 *
 * Model for ManagementReportNotification
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_6\Company\NotificationRecipientReference $notifyWho
 * @property Spinen\ConnectWise\Models\v2018_6\Company\MemberReference $member
 * @property string $email
 * @property boolean $globalFlag
 * @property Spinen\ConnectWise\Models\v2018_6\Company\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2018_6\Company\Metadata $_info
 */
class ManagementReportNotification extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'notifyWho' => 'Spinen\ConnectWise\Models\v2018_6\Company\NotificationRecipientReference',
        'member' => 'Spinen\ConnectWise\Models\v2018_6\Company\MemberReference',
        'email' => 'string',
        'globalFlag' => 'boolean',
        'company' => 'Spinen\ConnectWise\Models\v2018_6\Company\CompanyReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Company\Metadata',
    ];
}
