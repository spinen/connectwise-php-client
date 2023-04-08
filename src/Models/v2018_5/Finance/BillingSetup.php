<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BillingSetup Version v2018_5
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
 * @property bool $NoWatermarkFlag
 * @property bool $allowRestrictedDeptOnRoutingFlag
 * @property bool $billProductAfterShipFlag
 * @property bool $billProjectCompleteFlag
 * @property bool $billProjectUnapprovedFlag
 * @property bool $billSalesOrderCompleteFlag
 * @property bool $billTicketCompleteFlag
 * @property bool $billTicketSeparatelyFlag
 * @property bool $billTicketUnapprovedFlag
 * @property bool $chargeAdjToFirmFlag
 * @property bool $copyAgreementProductsFlag
 * @property bool $copyNonServiceProductsFlag
 * @property bool $copyServiceProductsFlag
 * @property bool $deliveryReceiptFlag
 * @property bool $disableRoutingEmailFlag
 * @property bool $displayTaxFlag
 * @property bool $excludeAvalaraFlag
 * @property bool $excludeDoNotBillExpenseFlag
 * @property bool $excludeDoNotBillProductFlag
 * @property bool $excludeDoNotBillTimeFlag
 * @property bool $printLogoFlag
 * @property bool $progressTimeFlag
 * @property bool $readReceiptFlag
 * @property bool $restrictDownpaymentFlag
 * @property bool $restrictProjectDownpaymentFlag
 * @property int $id
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
