<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeExpense Version v2018_4
 *
 * Model for TimeExpense
 *
 * @property Spinen\ConnectWise\Models\v2018_4\System\CompanyReference $internalCompany
 * @property Spinen\ConnectWise\Models\v2018_4\System\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\System\Metadata',
        'disableTimeEntryFlag' => 'boolean',
        'id' => 'integer',
        'internalCompany' => 'Spinen\ConnectWise\Models\v2018_4\System\CompanyReference',
        'invoiceStart' => 'integer',
        'requireExpenseNoteFlag' => 'boolean',
        'requireTimeNoteFlag' => 'boolean',
        'roundingFactor' => 'float',
        'tier1ApprovalFlag' => 'boolean',
        'tier2ApprovalFlag' => 'boolean',
    ];
}
