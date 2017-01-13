<?php

namespace Spinen\ConnectWise\Models\Company;

use Spinen\ConnectWise\Support\Model;

class CompanySite extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'addressLine1' => 'string',
        'addressLine2' => 'string',
        'city' => 'string',
        'state' => 'string',
        'zip' => 'string',
        'phoneNumber' => 'string',
        'faxNumber' => 'string',
        'taxCodeId' => 'integer',
        'expenseReimbursement' => 'double',
        'primaryAddressFlag' => 'boolean',
        'defaultShippingFlag' => 'boolean',
        'defaultBillingFlag' => 'boolean',
        'defaultMailingFlag' => 'boolean',
    ];
}
