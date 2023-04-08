<?php

namespace Spinen\ConnectWise\Models\v2019_2\Expense;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseReportAudit Version v2019_2
 *
 * Model for ExpenseReportAudit
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
class ExpenseReportAudit extends Model
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
