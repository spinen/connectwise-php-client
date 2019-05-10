<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeExpense Version v2018_5
 *
 * Model for TimeExpense
 *
 * @property CompanyReference $internalCompany
 * @property Metadata $_info
 * @property boolean $disableTimeEntryFlag
 * @property boolean $requireExpenseNoteFlag
 * @property boolean $requireTimeNoteFlag
 * @property boolean $tier1ApprovalFlag
 * @property boolean $tier2ApprovalFlag
 * @property float $roundingFactor
 * @property integer $id
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
        '_info' => Metadata::class,
        'disableTimeEntryFlag' => 'boolean',
        'id' => 'integer',
        'internalCompany' => CompanyReference::class,
        'invoiceStart' => 'integer',
        'requireExpenseNoteFlag' => 'boolean',
        'requireTimeNoteFlag' => 'boolean',
        'roundingFactor' => 'float',
        'tier1ApprovalFlag' => 'boolean',
        'tier2ApprovalFlag' => 'boolean'
    ];
}
