<?php

namespace Spinen\ConnectWise\Models\System;

use Spinen\ConnectWise\Support\Model;

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
