<?php

namespace Spinen\ConnectWise\Models\Company;

use Spinen\ConnectWise\Support\Model;

class Company extends Model
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
        'addressLine1' => 'string',
        'addressLine2' => 'string',
        'city' => 'string',
        'state' => 'string',
        'zip' => 'string',
        'phoneNumber' => 'string',
        'faxNumber' => 'string',
        'website' => 'string',
        'territoryId' => 'integer',
        'marketId' => 'integer',
        'accountNumber' => 'string',
        'dateAcquired' => 'carbon',
        'annualRevenue' => 'double',
        'numberOfEmployees' => 'integer',
        'leadSource' => 'string',
        'leadFlag' => 'boolean',
        'unsubscribeFlag' => 'boolean',
        'calendarId' => 'integer',
        'userDefinedField1' => 'string',
        'userDefinedField2' => 'string',
        'userDefinedField3' => 'string',
        'userDefinedField4' => 'string',
        'userDefinedField5' => 'string',
        'userDefinedField6' => 'string',
        'userDefinedField7' => 'string',
        'userDefinedField8' => 'string',
        'userDefinedField9' => 'string',
        'userDefinedField10' => 'string',
        'vendorIdentifier' => 'string',
        'taxIdentifier' => 'string',
        'invoiceToEmailAddress' => 'string',
        'invoiceCCEmailAddress' => 'string',
        'deletedFlag' => 'boolean',
        'dateDeleted' => 'carbon',
        'deletedBy' => 'string',
        'customFields' => 'array',
    ];
}
