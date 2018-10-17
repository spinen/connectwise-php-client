<?php

namespace Spinen\ConnectWise\Models\System;

use Spinen\ConnectWise\Support\Model;

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
