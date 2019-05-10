<?php

namespace Spinen\ConnectWise\Models\v2019_1\Expense;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseEntryAudit Version v2019_1
 *
 * Model for ExpenseEntryAudit
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Expense\AuditSource $source
 * @property Spinen\ConnectWise\Models\v2019_1\Expense\AuditType $type
 * @property Spinen\ConnectWise\Models\v2019_1\Expense\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_1\Expense\Metadata $_info
 * @property integer $id
 * @property string $message
 * @property string $newValue
 * @property string $oldValue
 * @property string $value
 */
class ExpenseEntryAudit extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Expense\Metadata',
        'id' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2019_1\Expense\MemberReference',
        'message' => 'string',
        'newValue' => 'string',
        'oldValue' => 'string',
        'source' => 'Spinen\ConnectWise\Models\v2019_1\Expense\AuditSource',
        'type' => 'Spinen\ConnectWise\Models\v2019_1\Expense\AuditType',
        'value' => 'string',
    ];
}
