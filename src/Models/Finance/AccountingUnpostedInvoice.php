<?php

namespace Spinen\ConnectWise\Models\Finance;

use Spinen\ConnectWise\Support\Model;

class AccountingUnpostedinvoice extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'billingLogId' => 'integer',
        'locationId' => 'integer',
        'departmentId' => 'integer',
        'accountNumber' => 'string',
        'invoiceNumber' => 'string',
        'invoiceDate' => 'carbon',
        'invoiceType' => 'string',
        'description' => 'string',
        'dueDays' => 'string',
        'dueDate' => 'carbon',
        'subTotal' => 'double',
        'total' => 'double',
        'invoiceTaxableFlag' => 'boolean',
        'avalaraTaxFlag' => 'boolean',
        'itemTaxableFlag' => 'boolean',
        'salesTaxAmount' => 'double',
        'stateTaxFlag' => 'boolean',
        'stateTaxXref' => 'string',
        'stateTaxAmount' => 'double',
        'countyTaxFlag' => 'boolean',
        'countyTaxXref' => 'string',
        'countyTaxAmount' => 'double',
        'cityTaxFlag' => 'boolean',
        'cityTaxXref' => 'string',
        'cityTaxAmount' => 'double',
        'countryTaxFlag' => 'boolean',
        'countryTaxXref' => 'string',
        'countryTaxAmount' => 'double',
        'compositeTaxFlag' => 'boolean',
        'compositeTaxXref' => 'string',
        'compositeTaxAmount' => 'double',
        'levelSixTaxFlag' => 'boolean',
        'levelSixTaxXref' => 'string',
        'levelSixTaxAmount' => 'double',
        'createdBy' => 'string',
        'dateClosed' => 'carbon',
    ];
}
