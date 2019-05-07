<?php

namespace Spinen\ConnectWise\Models\v2018_4\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TrackAction
 *
 * @property integer $id
 * @property string $notifyType
 * @property string $emailRecipient
 * @property string $emailFrom
 * @property string $subject
 * @property string $notes
 * @property integer $daysToExecute
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
        'emailRecipient' => 'string',
        'emailFrom' => 'string',
        'subject' => 'string',
        'notes' => 'string',
        'daysToExecute' => 'integer',
    ];
}
