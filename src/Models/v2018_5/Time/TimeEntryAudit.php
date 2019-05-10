<?php

namespace Spinen\ConnectWise\Models\v2018_5\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeEntryAudit Version v2018_5
 *
 * Model for TimeEntryAudit
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_5\Time\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_5\Time\AuditSource $source
 * @property Spinen\ConnectWise\Models\v2018_5\Time\AuditType $type
 * @property string $message
 * @property string $oldValue
 * @property string $newValue
 * @property string $value
 * @property Spinen\ConnectWise\Models\v2018_5\Time\Metadata $_info
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
        'member' => 'Spinen\ConnectWise\Models\v2018_5\Time\MemberReference',
        'source' => 'Spinen\ConnectWise\Models\v2018_5\Time\AuditSource',
        'type' => 'Spinen\ConnectWise\Models\v2018_5\Time\AuditType',
        'message' => 'string',
        'oldValue' => 'string',
        'newValue' => 'string',
        'value' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Time\Metadata',
    ];
}
