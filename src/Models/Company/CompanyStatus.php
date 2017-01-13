<?php

namespace Spinen\ConnectWise\Models\Company;

use Spinen\ConnectWise\Support\Model;

class CompanyStatus extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'defaultFlag' => 'boolean',
        'inactiveFlag' => 'boolean',
        'notifyFlag' => 'boolean',
        'disallowSavingFlag' => 'boolean',
        'notificationMessage' => 'string',
        'customNoteFlag' => 'boolean',
        'cancelOpenTracksFlag' => 'boolean',
    ];
}
