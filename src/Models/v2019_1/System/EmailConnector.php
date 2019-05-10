<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class EmailConnector Version v2019_1
 *
 * Model for EmailConnector
 *
 * @property Spinen\ConnectWise\Models\v2019_1\System\BoardReference $serviceBoard
 * @property Spinen\ConnectWise\Models\v2019_1\System\CompanyReference $defaultCompany
 * @property Spinen\ConnectWise\Models\v2019_1\System\ImapSetupReference $imapSetup
 * @property Spinen\ConnectWise\Models\v2019_1\System\MemberReference $defaultMember
 * @property Spinen\ConnectWise\Models\v2019_1\System\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_1\System\PriorityReference $priorityOverride
 * @property Spinen\ConnectWise\Models\v2019_1\System\ServiceItemReference $itemOverride
 * @property Spinen\ConnectWise\Models\v2019_1\System\ServiceSourceReference $sourceOverride
 * @property Spinen\ConnectWise\Models\v2019_1\System\ServiceStatusReference $statusOverride
 * @property Spinen\ConnectWise\Models\v2019_1\System\ServiceSubTypeReference $subTypeOverride
 * @property Spinen\ConnectWise\Models\v2019_1\System\ServiceTypeReference $typeOverride
 * @property Spinen\ConnectWise\Models\v2019_1\System\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2019_1\System\SystemLocationReference $location
 * @property boolean $addCcFlag
 * @property boolean $createContactFlag
 * @property boolean $discardDuplicatesFlag
 * @property boolean $neverRespondFlag
 * @property boolean $noResponseFlag
 * @property boolean $postRepliesToTicketFlag
 * @property boolean $setEmailToDefaultContactFlag
 * @property integer $id
 * @property string $bccEmailTo
 * @property string $emailErrorsTo
 * @property string $emailNotifyFrom
 * @property string $responseEmailForExisting
 * @property string $responseEmailForNew
 */
class EmailConnector extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\System\Metadata',
        'addCcFlag' => 'boolean',
        'bccEmailTo' => 'string',
        'createContactFlag' => 'boolean',
        'defaultCompany' => 'Spinen\ConnectWise\Models\v2019_1\System\CompanyReference',
        'defaultMember' => 'Spinen\ConnectWise\Models\v2019_1\System\MemberReference',
        'department' => 'Spinen\ConnectWise\Models\v2019_1\System\SystemDepartmentReference',
        'discardDuplicatesFlag' => 'boolean',
        'emailErrorsTo' => 'string',
        'emailNotifyFrom' => 'string',
        'id' => 'integer',
        'imapSetup' => 'Spinen\ConnectWise\Models\v2019_1\System\ImapSetupReference',
        'itemOverride' => 'Spinen\ConnectWise\Models\v2019_1\System\ServiceItemReference',
        'location' => 'Spinen\ConnectWise\Models\v2019_1\System\SystemLocationReference',
        'neverRespondFlag' => 'boolean',
        'noResponseFlag' => 'boolean',
        'postRepliesToTicketFlag' => 'boolean',
        'priorityOverride' => 'Spinen\ConnectWise\Models\v2019_1\System\PriorityReference',
        'responseEmailForExisting' => 'string',
        'responseEmailForNew' => 'string',
        'serviceBoard' => 'Spinen\ConnectWise\Models\v2019_1\System\BoardReference',
        'setEmailToDefaultContactFlag' => 'boolean',
        'sourceOverride' => 'Spinen\ConnectWise\Models\v2019_1\System\ServiceSourceReference',
        'statusOverride' => 'Spinen\ConnectWise\Models\v2019_1\System\ServiceStatusReference',
        'subTypeOverride' => 'Spinen\ConnectWise\Models\v2019_1\System\ServiceSubTypeReference',
        'typeOverride' => 'Spinen\ConnectWise\Models\v2019_1\System\ServiceTypeReference',
    ];
}
