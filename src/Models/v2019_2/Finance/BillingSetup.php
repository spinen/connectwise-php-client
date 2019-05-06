<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

class BillingSetup extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'remitName' => 'string',
        'addressOne' => 'string',
        'addressTwo' => 'string',
        'city' => 'string',
        'zip' => 'string',
        'phone' => 'string',
        'invoiceTitle' => 'string',
        'payableName' => 'string',
        'topcomment' => 'string',
        'invoiceFooter' => 'string',
        'quoteFooter' => 'string',
        'excludeDoNotBillTimeFlag' => 'boolean',
        'excludeDoNotBillExpenseFlag' => 'boolean',
        'excludeDoNotBillProductFlag' => 'boolean',
        'prefixSuffixFlag' => 'string',
        'prefixSuffixText' => 'string',
        'chargeAdjToFirmFlag' => 'boolean',
        'NoWatermarkFlag' => 'boolean',
        'displayTaxFlag' => 'boolean',
        'allowRestrictedDeptOnRoutingFlag' => 'boolean',
        'billTicketSeparatelyFlag' => 'boolean',
        'billTicketCompleteFlag' => 'boolean',
        'billTicketUnapprovedFlag' => 'boolean',
        'billProjectCompleteFlag' => 'boolean',
        'billProjectUnapprovedFlag' => 'boolean',
        'progressTimeFlag' => 'boolean',
        'restrictProjectDownpaymentFlag' => 'boolean',
        'billSalesOrderCompleteFlag' => 'boolean',
        'billProductAfterShipFlag' => 'boolean',
        'restrictDownpaymentFlag' => 'boolean',
        'copyNonServiceProductsFlag' => 'boolean',
        'copyServiceProductsFlag' => 'boolean',
        'copyAgreementProductsFlag' => 'boolean',
        'printLogoFlag' => 'boolean',
        'readReceiptFlag' => 'boolean',
        'deliveryReceiptFlag' => 'boolean',
        'disableRoutingEmailFlag' => 'boolean',
        'businessNumber' => 'string',
        'customLabel' => 'string',
        'customText' => 'string',
        'companyCode' => 'string',
        'excludeAvalaraFlag' => 'boolean',
    ];
}
