<?php

namespace Spinen\ConnectWise\Models\v2018_5\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeEntryAudit Version v2018_5
 *
 * Model for TimeEntryAudit
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Time\AuditSource $source
 * @property Spinen\ConnectWise\Models\v2018_5\Time\AuditType $type
 * @property Spinen\ConnectWise\Models\v2018_5\Time\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_5\Time\Metadata $_info
 * @property integer $id
 * @property string $message
 * @property string $newValue
 * @property string $oldValue
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Time\Metadata',
        'id' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2018_5\Time\MemberReference',
        'message' => 'string',
        'newValue' => 'string',
        'oldValue' => 'string',
        'source' => 'Spinen\ConnectWise\Models\v2018_5\Time\AuditSource',
        'type' => 'Spinen\ConnectWise\Models\v2018_5\Time\AuditType',
        'value' => 'string',
    ];
}
