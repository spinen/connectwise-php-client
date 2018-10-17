<?php

namespace Spinen\ConnectWise\Models\Company;

use Spinen\ConnectWise\Support\Model;

class ContactType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'description' => 'string',
        'defaultFlag' => 'boolean',
        'serviceAlertFlag' => 'boolean',
        'serviceAlertMessage' => 'string',
    ];
}
