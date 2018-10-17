<?php

namespace Spinen\ConnectWise\Models\System;

use Spinen\ConnectWise\Support\Model;

class NotificationRecipient extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string',
        'externalFlag' => 'boolean',
        'serviceFlag' => 'boolean',
        'salesFlag' => 'boolean',
        'invoiceFlag' => 'boolean',
        'agreementFlag' => 'boolean',
        'memberFlag' => 'boolean',
        'configFlag' => 'boolean',
        'mspFlag' => 'boolean',
        'trackFlag' => 'boolean',
        'projectFlag' => 'boolean',
        'procurementFlag' => 'boolean',
        'knowledgeBaseFlag' => 'boolean',
    ];
}
