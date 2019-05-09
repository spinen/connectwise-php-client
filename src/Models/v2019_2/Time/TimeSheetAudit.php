<?php

namespace Spinen\ConnectWise\Models\v2019_2\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeSheetAudit Version v2019_2
 * 
 * Model for TimeSheetAudit
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_2\Time\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_2\Time\AuditSource $source
 * @property Spinen\ConnectWise\Models\v2019_2\Time\AuditType $type
 * @property string $message
 * @property string $oldValue
 * @property string $newValue
 * @property string $value
 * @property Spinen\ConnectWise\Models\v2019_2\Time\Metadata $_info
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
        'member' => 'Spinen\ConnectWise\Models\v2019_2\Time\MemberReference',
        'source' => 'Spinen\ConnectWise\Models\v2019_2\Time\AuditSource',
        'type' => 'Spinen\ConnectWise\Models\v2019_2\Time\AuditType',
        'message' => 'string',
        'oldValue' => 'string',
        'newValue' => 'string',
        'value' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Time\Metadata',
    ];
}
