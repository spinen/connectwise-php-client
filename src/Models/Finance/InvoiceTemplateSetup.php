<?php

namespace Spinen\ConnectWise\Models\Finance;

use Spinen\ConnectWise\Support\Model;

class InvoiceTemplateSetup extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'customFlag' => 'boolean',
    ];
}
