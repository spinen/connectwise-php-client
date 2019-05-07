<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class EmailConnector
 *
 * @property integer $id
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
 * @property boolean $addCcFlag
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
        'addCcFlag' => 'boolean',
    ];
}
