<?php

namespace Spinen\ConnectWise\Models\Service;

use Spinen\ConnectWise\Support\Model;

class TicketNote extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'ticketId' => 'integer',
        'text' => 'string',
        'detailDescriptionFlag' => 'boolean',
        'internalAnalysisFlag' => 'boolean',
        'resolutionFlag' => 'boolean',
        'customerUpdatedFlag' => 'boolean',
        'processNotifications' => 'boolean',
        'dateCreated' => 'string',
        'createdBy' => 'string',
        'internalFlag' => 'boolean',
        'externalFlag' => 'boolean',
    ];
}
