<?php

namespace Spinen\ConnectWise\Models\v2018_4\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeSheetAudit Version v2018_4
 *
 * Model for TimeSheetAudit
 *
 * @property AuditSource $source
 * @property AuditType $type
 * @property MemberReference $member
 * @property Metadata $_info
 * @property int $id
 * @property string $message
 * @property string $newValue
 * @property string $oldValue
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
        '_info' => Metadata::class,
        'id' => 'integer',
        'member' => MemberReference::class,
        'message' => 'string',
        'newValue' => 'string',
        'oldValue' => 'string',
        'source' => AuditSource::class,
        'type' => AuditType::class,
        'value' => 'string',
    ];
}
