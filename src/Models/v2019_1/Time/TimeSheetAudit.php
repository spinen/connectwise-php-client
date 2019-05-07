<?php

namespace Spinen\ConnectWise\Models\v2019_1\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeSheetAudit
 *
 * @property integer $id
 * @property string $message
 * @property string $oldValue
 * @property string $newValue
 * @property string $value
 */
class TimeSheetAudit extends Model
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
