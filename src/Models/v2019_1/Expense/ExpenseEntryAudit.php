<?php

namespace Spinen\ConnectWise\Models\v2019_1\Expense;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseEntryAudit Version v2019_1
 * 
 * Model for ExpenseEntryAudit
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_1\Expense\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_1\Expense\AuditSource $source
 * @property Spinen\ConnectWise\Models\v2019_1\Expense\AuditType $type
 * @property string $message
 * @property string $oldValue
 * @property string $newValue
 * @property string $value
 * @property Spinen\ConnectWise\Models\v2019_1\Expense\Metadata $_info
 */
class ExpenseEntryAudit extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2019_1\Expense\MemberReference',
        'source' => 'Spinen\ConnectWise\Models\v2019_1\Expense\AuditSource',
        'type' => 'Spinen\ConnectWise\Models\v2019_1\Expense\AuditType',
        'message' => 'string',
        'oldValue' => 'string',
        'newValue' => 'string',
        'value' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Expense\Metadata',
    ];
}
