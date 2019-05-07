<?php

namespace Spinen\ConnectWise\Models\v2018_5\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeEntryAudit
 *
 * @property integer $id
 * @property string $message
 * @property string $oldValue
 * @property string $newValue
 * @property string $value
 */
class TimeEntryAudit extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'message' => 'string',
        'oldValue' => 'string',
        'newValue' => 'string',
        'value' => 'string',
    ];
}
