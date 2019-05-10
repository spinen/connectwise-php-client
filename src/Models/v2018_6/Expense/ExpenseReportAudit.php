<?php

namespace Spinen\ConnectWise\Models\v2018_6\Expense;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseReportAudit Version v2018_6
 *
 * Model for ExpenseReportAudit
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_6\Expense\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_6\Expense\AuditSource $source
 * @property Spinen\ConnectWise\Models\v2018_6\Expense\AuditType $type
 * @property string $message
 * @property string $oldValue
 * @property string $newValue
 * @property string $value
 * @property Spinen\ConnectWise\Models\v2018_6\Expense\Metadata $_info
 */
class ExpenseReportAudit extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2018_6\Expense\MemberReference',
        'source' => 'Spinen\ConnectWise\Models\v2018_6\Expense\AuditSource',
        'type' => 'Spinen\ConnectWise\Models\v2018_6\Expense\AuditType',
        'message' => 'string',
        'oldValue' => 'string',
        'newValue' => 'string',
        'value' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Expense\Metadata',
    ];
}
