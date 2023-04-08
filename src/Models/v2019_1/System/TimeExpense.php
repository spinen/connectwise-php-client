<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeExpense Version v2019_1
 *
 * Model for TimeExpense
 *
 * @property CompanyReference $internalCompany
 * @property Metadata $_info
 * @property bool $disableTimeEntryFlag
 * @property bool $requireExpenseNoteFlag
 * @property bool $requireTimeNoteFlag
 * @property bool $tier1ApprovalFlag
 * @property bool $tier2ApprovalFlag
 * @property float $roundingFactor
 * @property int $id
 * @property int $invoiceStart
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
        'tier2ApprovalFlag' => 'boolean',
    ];
}
