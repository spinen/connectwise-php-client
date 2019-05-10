<?php

namespace Spinen\ConnectWise\Models\v2019_2\Expense;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseReportAudit Version v2019_2
 *
 * Model for ExpenseReportAudit
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Expense\AuditSource $source
 * @property Spinen\ConnectWise\Models\v2019_2\Expense\AuditType $type
 * @property Spinen\ConnectWise\Models\v2019_2\Expense\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_2\Expense\Metadata $_info
 * @property integer $id
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Expense\Metadata',
        'id' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2019_2\Expense\MemberReference',
        'message' => 'string',
        'newValue' => 'string',
        'oldValue' => 'string',
        'source' => 'Spinen\ConnectWise\Models\v2019_2\Expense\AuditSource',
        'type' => 'Spinen\ConnectWise\Models\v2019_2\Expense\AuditType',
        'value' => 'string',
    ];
}
