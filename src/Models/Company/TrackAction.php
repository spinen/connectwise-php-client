<?php

namespace Spinen\ConnectWise\Models\Company;

use Spinen\ConnectWise\Support\Model;

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
        'emailRecipient' => 'string',
        'emailFrom' => 'string',
        'subject' => 'string',
        'notes' => 'string',
        'daysToExecute' => 'integer',
    ];
}
