<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BillingSetup Version v2019_1
 *
 * Model for BillingSetup
 *
 * @property CountryReference $country
 * @property CountryReference $localizedCountry
 * @property CurrencyReference $currency
 * @property EmailTemplateReference $emailTemplate
 * @property InvoiceTemplateReference $agreementInvoice
 * @property InvoiceTemplateReference $creditMemoInvoice
 * @property InvoiceTemplateReference $downPaymentInvoice
 * @property InvoiceTemplateReference $miscInvoice
 * @property InvoiceTemplateReference $overallInvoiceDefault
 * @property InvoiceTemplateReference $progressInvoice
 * @property InvoiceTemplateReference $salesOrderInvoice
 * @property InvoiceTemplateReference $standardInvoiceActual
 * @property InvoiceTemplateReference $standardInvoiceFixed
 * @property Metadata $_info
 * @property StateReference $state
 * @property SystemLocationReference $location
 * @property boolean $NoWatermarkFlag
 * @property boolean $allowRestrictedDeptOnRoutingFlag
 * @property boolean $billProductAfterShipFlag
 * @property boolean $billProjectCompleteFlag
 * @property boolean $billProjectUnapprovedFlag
 * @property boolean $billSalesOrderCompleteFlag
 * @property boolean $billTicketCompleteFlag
 * @property boolean $billTicketSeparatelyFlag
 * @property boolean $billTicketUnapprovedFlag
 * @property boolean $chargeAdjToFirmFlag
 * @property boolean $copyAgreementProductsFlag
 * @property boolean $copyNonServiceProductsFlag
 * @property boolean $copyServiceProductsFlag
 * @property boolean $deliveryReceiptFlag
 * @property boolean $disableRoutingEmailFlag
 * @property boolean $displayTaxFlag
 * @property boolean $excludeAvalaraFlag
 * @property boolean $excludeDoNotBillExpenseFlag
 * @property boolean $excludeDoNotBillProductFlag
 * @property boolean $excludeDoNotBillTimeFlag
 * @property boolean $printLogoFlag
 * @property boolean $progressTimeFlag
 * @property boolean $readReceiptFlag
 * @property boolean $restrictDownpaymentFlag
 * @property boolean $restrictProjectDownpaymentFlag
 * @property integer $id
 * @property string $addressOne
 * @property string $addressTwo
 * @property string $businessNumber
 * @property string $city
 * @property string $companyCode
 * @property string $customLabel
 * @property string $customText
 * @property string $invoiceFooter
 * @property string $invoiceTitle
 * @property string $payableName
 * @property string $phone
 * @property string $prefixSuffixFlag
 * @property string $prefixSuffixText
 * @property string $quoteFooter
 * @property string $remitName
 * @property string $topcomment
 * @property string $zip
 */
class BillingSetup extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'NoWatermarkFlag' => 'boolean',
        '_info' => Metadata::class,
        'addressOne' => 'string',
        'addressTwo' => 'string',
        'agreementInvoice' => InvoiceTemplateReference::class,
        'allowRestrictedDeptOnRoutingFlag' => 'boolean',
        'billProductAfterShipFlag' => 'boolean',
        'billProjectCompleteFlag' => 'boolean',
        'billProjectUnapprovedFlag' => 'boolean',
        'billSalesOrderCompleteFlag' => 'boolean',
        'billTicketCompleteFlag' => 'boolean',
        'billTicketSeparatelyFlag' => 'boolean',
        'billTicketUnapprovedFlag' => 'boolean',
        'businessNumber' => 'string',
        'chargeAdjToFirmFlag' => 'boolean',
        'city' => 'string',
        'companyCode' => 'string',
        'copyAgreementProductsFlag' => 'boolean',
        'copyNonServiceProductsFlag' => 'boolean',
        'copyServiceProductsFlag' => 'boolean',
        'country' => CountryReference::class,
        'creditMemoInvoice' => InvoiceTemplateReference::class,
        'currency' => CurrencyReference::class,
        'customLabel' => 'string',
        'customText' => 'string',
        'deliveryReceiptFlag' => 'boolean',
        'disableRoutingEmailFlag' => 'boolean',
        'displayTaxFlag' => 'boolean',
        'downPaymentInvoice' => InvoiceTemplateReference::class,
        'emailTemplate' => EmailTemplateReference::class,
        'excludeAvalaraFlag' => 'boolean',
        'excludeDoNotBillExpenseFlag' => 'boolean',
        'excludeDoNotBillProductFlag' => 'boolean',
        'excludeDoNotBillTimeFlag' => 'boolean',
        'id' => 'integer',
        'invoiceFooter' => 'string',
        'invoiceTitle' => 'string',
        'localizedCountry' => CountryReference::class,
        'location' => SystemLocationReference::class,
        'miscInvoice' => InvoiceTemplateReference::class,
        'overallInvoiceDefault' => InvoiceTemplateReference::class,
        'payableName' => 'string',
        'phone' => 'string',
        'prefixSuffixFlag' => 'string',
        'prefixSuffixText' => 'string',
        'printLogoFlag' => 'boolean',
        'progressInvoice' => InvoiceTemplateReference::class,
        'progressTimeFlag' => 'boolean',
        'quoteFooter' => 'string',
        'readReceiptFlag' => 'boolean',
        'remitName' => 'string',
        'restrictDownpaymentFlag' => 'boolean',
        'restrictProjectDownpaymentFlag' => 'boolean',
        'salesOrderInvoice' => InvoiceTemplateReference::class,
        'standardInvoiceActual' => InvoiceTemplateReference::class,
        'standardInvoiceFixed' => InvoiceTemplateReference::class,
        'state' => StateReference::class,
        'topcomment' => 'string',
        'zip' => 'string',
    ];
}
