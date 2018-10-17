<?php

namespace Spinen\ConnectWise\Models\Company;

use Spinen\ConnectWise\Support\Model;

class CompanyGroup extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'defaultContactFlag' => 'boolean',
        'allContactsFlag' => 'boolean',
        'removeAllContactsFlag' => 'boolean',
        'unsubscribeFlag' => 'boolean',
        'contactIds' => 'array',
    ];
}
