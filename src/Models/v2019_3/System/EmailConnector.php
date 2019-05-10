<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class EmailConnector Version v2019_3
 *
 * Model for EmailConnector
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_3\System\ImapSetupReference $imapSetup
 * @property Spinen\ConnectWise\Models\v2019_3\System\BoardReference $serviceBoard
 * @property Spinen\ConnectWise\Models\v2019_3\System\CompanyReference $defaultCompany
 * @property Spinen\ConnectWise\Models\v2019_3\System\MemberReference $defaultMember
 * @property Spinen\ConnectWise\Models\v2019_3\System\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2019_3\System\SystemDepartmentReference $department
 * @property string $emailNotifyFrom
 * @property string $bccEmailTo
 * @property string $emailErrorsTo
 * @property boolean $setEmailToDefaultContactFlag
 * @property boolean $noResponseFlag
 * @property boolean $neverRespondFlag
 * @property boolean $discardDuplicatesFlag
 * @property boolean $postRepliesToTicketFlag
 * @property boolean $createContactFlag
 * @property string $responseEmailForNew
 * @property string $responseEmailForExisting
 * @property Spinen\ConnectWise\Models\v2019_3\System\ServiceSourceReference $sourceOverride
 * @property Spinen\ConnectWise\Models\v2019_3\System\PriorityReference $priorityOverride
 * @property Spinen\ConnectWise\Models\v2019_3\System\ServiceTypeReference $typeOverride
 * @property Spinen\ConnectWise\Models\v2019_3\System\ServiceSubTypeReference $subTypeOverride
 * @property Spinen\ConnectWise\Models\v2019_3\System\ServiceItemReference $itemOverride
 * @property Spinen\ConnectWise\Models\v2019_3\System\ServiceStatusReference $statusOverride
 * @property boolean $addCcFlag
 * @property Spinen\ConnectWise\Models\v2019_3\System\Metadata $_info
 */
class EmailConnector extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'imapSetup' => 'Spinen\ConnectWise\Models\v2019_3\System\ImapSetupReference',
        'serviceBoard' => 'Spinen\ConnectWise\Models\v2019_3\System\BoardReference',
        'defaultCompany' => 'Spinen\ConnectWise\Models\v2019_3\System\CompanyReference',
        'defaultMember' => 'Spinen\ConnectWise\Models\v2019_3\System\MemberReference',
        'location' => 'Spinen\ConnectWise\Models\v2019_3\System\SystemLocationReference',
        'department' => 'Spinen\ConnectWise\Models\v2019_3\System\SystemDepartmentReference',
        'emailNotifyFrom' => 'string',
        'bccEmailTo' => 'string',
        'emailErrorsTo' => 'string',
        'setEmailToDefaultContactFlag' => 'boolean',
        'noResponseFlag' => 'boolean',
        'neverRespondFlag' => 'boolean',
        'discardDuplicatesFlag' => 'boolean',
        'postRepliesToTicketFlag' => 'boolean',
        'createContactFlag' => 'boolean',
        'responseEmailForNew' => 'string',
        'responseEmailForExisting' => 'string',
        'sourceOverride' => 'Spinen\ConnectWise\Models\v2019_3\System\ServiceSourceReference',
        'priorityOverride' => 'Spinen\ConnectWise\Models\v2019_3\System\PriorityReference',
        'typeOverride' => 'Spinen\ConnectWise\Models\v2019_3\System\ServiceTypeReference',
        'subTypeOverride' => 'Spinen\ConnectWise\Models\v2019_3\System\ServiceSubTypeReference',
        'itemOverride' => 'Spinen\ConnectWise\Models\v2019_3\System\ServiceItemReference',
        'statusOverride' => 'Spinen\ConnectWise\Models\v2019_3\System\ServiceStatusReference',
        'addCcFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\System\Metadata',
    ];
}
