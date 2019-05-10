<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeExpense Version v2019_3
 *
 * Model for TimeExpense
 *
 * @property integer $id
 * @property boolean $tier1ApprovalFlag
 * @property boolean $tier2ApprovalFlag
 * @property boolean $disableTimeEntryFlag
 * @property boolean $requireTimeNoteFlag
 * @property boolean $requireExpenseNoteFlag
 * @property float $roundingFactor
 * @property integer $invoiceStart
 * @property Spinen\ConnectWise\Models\v2019_3\System\CompanyReference $internalCompany
 * @property Spinen\ConnectWise\Models\v2019_3\System\Metadata $_info
 */
class TimeExpense extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tier1ApprovalFlag' => 'boolean',
        'tier2ApprovalFlag' => 'boolean',
        'disableTimeEntryFlag' => 'boolean',
        'requireTimeNoteFlag' => 'boolean',
        'requireExpenseNoteFlag' => 'boolean',
        'roundingFactor' => 'float',
        'invoiceStart' => 'integer',
        'internalCompany' => 'Spinen\ConnectWise\Models\v2019_3\System\CompanyReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\System\Metadata',
    ];
}
