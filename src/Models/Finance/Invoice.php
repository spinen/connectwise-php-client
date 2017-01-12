<?php

namespace Spinen\ConnectWise\Models\Finance;

use Spinen\ConnectWise\Support\Model;

class Invoice extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id'                             => 'integer',
        'invoiceNumber'                  => 'string',
        'type'                           => 'Enum',
        //        'status'                         => 'BillingStatusReference',
        //        'company'                        => 'CompanyReference',
        //        'billToCompany'                  => 'CompanyReference',
        //        'shipToCompany'                  => 'CompanyReference',
        //        'applyToType'                    => 'Enum',
        'applyToId'                      => 'integer',
        'attention'                      => 'string',
        //        'billingSite'                    => 'SiteReference',
        //        'shippingSite'                   => 'SiteReference',
        //        'billingTerms'                   => 'BillingTermsReference',
        'reference'                      => 'string',
        'customerPO'                     => 'string',
        'templateSetupId'                => 'integer',
        'emailTemplateId'                => 'integer',
        'addToBatchEmailList'            => 'boolean',
        'date'                           => 'carbon',
        'restrictDownpaymentFlag'        => 'boolean',
        'locationId'                     => 'integer',
        'departmentId'                   => 'integer',
        'territoryId'                    => 'integer',
        'topComment'                     => 'string',
        'bottomComment'                  => 'string',
        'taxableFlag'                    => 'boolean',
        //        'taxCode'                        => 'TaxCodeReference',
        'internalNotes'                  => 'string',
        'downpaymentPreviouslyTaxedFlag' => 'boolean',
        'serviceTotal'                   => 'double',
        'dueDate'                        => 'carbon',
        'expenseTotal'                   => 'double',
        'productTotal'                   => 'double',
        'previousProgressApplied'        => 'double',
        'serviceAdjustmentAmount'        => 'double',
        'agreementAmount'                => 'double',
        'downpaymentApplied'             => 'double',
        'subtotal'                       => 'double',
        'total'                          => 'double',
        'remainingDownpayment'           => 'double',
        'salesTax'                       => 'double',
        'adjustmentReason'               => 'string',
        'adjustedBy'                     => 'string',
        'payments'                       => 'double',
        'credits'                        => 'double',
        'balance'                        => 'double',
        'specialInvoiceFlag'             => 'boolean',
    ];
}
