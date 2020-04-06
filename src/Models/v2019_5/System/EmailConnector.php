<?php

namespace Spinen\ConnectWise\Models\v2019_5\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class EmailConnector Version v2019_5
 *
 * Model for EmailConnector
 *
 * @property BoardReference $serviceBoard
 * @property CompanyReference $defaultCompany
 * @property ImapSetupReference $imapSetup
 * @property MemberReference $defaultMember
 * @property Metadata $_info
 * @property PriorityReference $priorityOverride
 * @property ServiceItemReference $itemOverride
 * @property ServiceSourceReference $sourceOverride
 * @property ServiceStatusReference $statusOverride
 * @property ServiceSubTypeReference $subTypeOverride
 * @property ServiceTypeReference $typeOverride
 * @property SystemDepartmentReference $department
 * @property SystemLocationReference $location
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
        '_info' => Metadata::class,
        'addCcFlag' => 'boolean',
        'bccEmailTo' => 'string',
        'createContactFlag' => 'boolean',
        'defaultCompany' => CompanyReference::class,
        'defaultMember' => MemberReference::class,
        'department' => SystemDepartmentReference::class,
        'discardDuplicatesFlag' => 'boolean',
        'emailErrorsTo' => 'string',
        'emailNotifyFrom' => 'string',
        'id' => 'integer',
        'imapSetup' => ImapSetupReference::class,
        'itemOverride' => ServiceItemReference::class,
        'location' => SystemLocationReference::class,
        'neverRespondFlag' => 'boolean',
        'noResponseFlag' => 'boolean',
        'postRepliesToTicketFlag' => 'boolean',
        'priorityOverride' => PriorityReference::class,
        'responseEmailForExisting' => 'string',
        'responseEmailForNew' => 'string',
        'serviceBoard' => BoardReference::class,
        'setEmailToDefaultContactFlag' => 'boolean',
        'sourceOverride' => ServiceSourceReference::class,
        'statusOverride' => ServiceStatusReference::class,
        'subTypeOverride' => ServiceSubTypeReference::class,
        'typeOverride' => ServiceTypeReference::class
    ];
}
