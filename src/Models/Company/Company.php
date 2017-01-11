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
        'id'                     => 'integer',
        'identifier'             => 'string',
        'name'                   => 'string',
        //        'status'                 => 'CompanyStatusReference',
        //        'type'                   => 'CompanyTypeReference',
        'addressLine1'           => 'string',
        'addressLine2'           => 'string',
        'city'                   => 'string',
        'state'                  => 'string',
        'zip'                    => 'string',
        //        'country'                => 'CountryReference',
        'phoneNumber'            => 'string',
        'faxNumber'              => 'string',
        'website'                => 'string',
        'territoryId'            => 'integer',
        'marketId'               => 'integer',
        'accountNumber'          => 'string',
        //        'defaultContact'         => 'ContactReference',
        'dateAcquired'           => 'string',
        //        'sicCode'                => 'SicCodeReference',
        //        'parentCompany'          => 'CompanyReference',
        'annualRevenue'          => 'double',
        'numberOfEmployees'      => 'integer',
        //        'ownershipType'          => 'OwnershipTypeReference',
        //        'timeZone'               => 'TimeZoneReference',
        'leadSource'             => 'string',
        'leadFlag'               => 'boolean',
        'unsubscribeFlag'        => 'boolean',
        'calendarId'             => 'integer',
        'userDefinedField1'      => 'string',
        'userDefinedField2'      => 'string',
        'userDefinedField3'      => 'string',
        'userDefinedField4'      => 'string',
        'userDefinedField5'      => 'string',
        'userDefinedField6'      => 'string',
        'userDefinedField7'      => 'string',
        'userDefinedField8'      => 'string',
        'userDefinedField9'      => 'string',
        'userDefinedField10'     => 'string',
        'vendorIdentifier'       => 'string',
        'taxIdentifier'          => 'string',
        //        'taxCode'                => 'TaxCodeReference',
        //        'billingTerms'           => 'BillingTermsReference',
        //        'invoiceTemplate'        => 'InvoiceTemplateReference',
        //        'pricingSchedule'        => 'PricingScheduleReference',
        //        'companyEntityType'      => 'EntityTypeReference',
        //        'billToCompany'          => 'CompanyReference',
        //        'billingSite'            => 'SiteReference',
        //        'billingContact'         => 'ContactReference',
        //        'invoiceDeliveryMethod'  => 'BillingDeliveryReference',
        'invoiceToEmailAddress ' => 'string',
        'invoiceCCEmailAddress'  => 'string',
        'deletedFlag'            => 'boolean',
        'dateDeleted'            => 'string',
        'deletedBy'              => 'string',
        //        'mobileGuid'             => 'Guid',
        //        'currency'               => 'CurrencyReference',
        //        'territoryManager'      => 'MemberReference',
        //        '_info'                 => 'Metadata',
        //        'customFields'           => 'CustomFieldValue[]',
    ];
}
