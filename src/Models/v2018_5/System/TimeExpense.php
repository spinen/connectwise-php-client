<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeExpense
 *
 * @property integer $id
 * @property boolean $tier1ApprovalFlag
 * @property boolean $tier2ApprovalFlag
 * @property boolean $disableTimeEntryFlag
 * @property boolean $requireTimeNoteFlag
 * @property boolean $requireExpenseNoteFlag
 * @property double $roundingFactor
 * @property integer $invoiceStart
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
        'roundingFactor' => 'double',
        'invoiceStart' => 'integer',
    ];
}
