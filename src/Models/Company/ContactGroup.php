<?php

namespace Spinen\ConnectWise\Models\Company;

use Spinen\ConnectWise\Support\Model;

class ContactGroup extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'description' => 'string',
        'unsubscribeFlag' => 'boolean',
        'companyUnsubcribedEmailMessage' => 'string',
        'companyGroupUnsubscribedEmailMessage' => 'string',
        'contactUnsubscribedEmailMessage' => 'string',
        'contactGroupUnsubscribedEmailMessage' => 'string',
    ];
}
