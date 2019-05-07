<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkflowAction
 *
 * @property integer $id
 * @property string $emailRecipient
 * @property string $emailFrom
 * @property string $subject
 * @property string $notes
 * @property integer $daysToExecute
 * @property integer $invoiceMinDays
 * @property boolean $detailNotesFlag
 * @property boolean $internalNotesFlag
 * @property boolean $auditNotesFlag
 * @property boolean $updateOwnerFlag
 * @property array $attachments
 */
class WorkflowAction extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'emailRecipient' => 'string',
        'emailFrom' => 'string',
        'subject' => 'string',
        'notes' => 'string',
        'daysToExecute' => 'integer',
        'invoiceMinDays' => 'integer',
        'detailNotesFlag' => 'boolean',
        'internalNotesFlag' => 'boolean',
        'auditNotesFlag' => 'boolean',
        'updateOwnerFlag' => 'boolean',
        'attachments' => 'array',
    ];
}
