<?php

namespace Spinen\ConnectWise\Models\Finance;

use Spinen\ConnectWise\Support\Model;

class AccountingUnpostedInvoice extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id'                 => 'integer',
        'billingLogId'       => 'integer',
        'locationId'         => 'integer',
        'departmentId'       => 'integer',
        //        'company'            => 'CompanyReference',
        'accountNumber'      => 'string',
        //        'billToCompany'      => 'CompanyReference',
        //        'billToSite'         => 'SiteReference',
        //        'shipToCompany'      => 'CompanyReference',
        //        'shipToSite'         => 'SiteReference',
        'invoiceNumber'      => 'string',
        'invoiceDate'        => 'carbon',
        //        'invoiceType'        => 'Enum',
        'description'        => 'string',
        //        'billingTerms'       => 'BillingTermsReference',
        'dueDays'            => 'string',
        'dueDate'            => 'carbon',
        //        'currency'           => 'CurrencyReference',
        'subTotal'           => 'double',
        'total'              => 'double',
        'invoiceTaxableFlag' => 'boolean',
        //        'taxCode'            => 'TaxCodeReference',
        'avalaraTaxFlag'     => 'boolean',
        'itemTaxableFlag'    => 'boolean',
        'salesTaxAmount'     => 'double',
        'stateTaxFlag'       => 'boolean',
        'stateTaxXref'       => 'string',
        'stateTaxAmount'     => 'double',
        'countyTaxFlag'      => 'boolean',
        'countyTaxXref'      => 'string',
        'countyTaxAmount'    => 'double',
        'cityTaxFlag'        => 'boolean',
        'cityTaxXref'        => 'string',
        'cityTaxAmount'      => 'double',
        'countryTaxFlag'     => 'boolean',
        'countryTaxXref'     => 'string',
        'countryTaxAmount'   => 'double',
        'compositeTaxFlag'   => 'boolean',
        'compositeTaxXref'   => 'string',
        'compositeTaxAmount' => 'double',
        'createdBy'          => 'string',
        'dateClosed'         => 'carbon',
        //        '_info'              => 'Metadata',
    ];
}
