<?php

namespace Spinen\ConnectWise\Models\Company;

use Spinen\ConnectWise\Support\Model;

class ContactCommunication extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'contactId' => 'integer',
        'value' => 'string',
        'extension' => 'string',
        'defaultFlag' => 'boolean',
        'communicationType' => 'string',
    ];
}
