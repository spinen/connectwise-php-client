<?php

namespace Spinen\ConnectWise\Models\v2019_3\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BillingSetup Version v2019_3
 *
 * Model for BillingSetup
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\CountryReference $country
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\CountryReference $localizedCountry
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\EmailTemplateReference $emailTemplate
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\InvoiceTemplateReference $agreementInvoice
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\InvoiceTemplateReference $creditMemoInvoice
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\InvoiceTemplateReference $downPaymentInvoice
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\InvoiceTemplateReference $miscInvoice
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\InvoiceTemplateReference $overallInvoiceDefault
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\InvoiceTemplateReference $progressInvoice
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\InvoiceTemplateReference $salesOrderInvoice
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\InvoiceTemplateReference $standardInvoiceActual
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\InvoiceTemplateReference $standardInvoiceFixed
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\StateReference $state
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\SystemLocationReference $location
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Finance\Metadata',
        'addressOne' => 'string',
        'addressTwo' => 'string',
        'agreementInvoice' => 'Spinen\ConnectWise\Models\v2019_3\Finance\InvoiceTemplateReference',
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
        'country' => 'Spinen\ConnectWise\Models\v2019_3\Finance\CountryReference',
        'creditMemoInvoice' => 'Spinen\ConnectWise\Models\v2019_3\Finance\InvoiceTemplateReference',
        'currency' => 'Spinen\ConnectWise\Models\v2019_3\Finance\CurrencyReference',
        'customLabel' => 'string',
        'customText' => 'string',
        'deliveryReceiptFlag' => 'boolean',
        'disableRoutingEmailFlag' => 'boolean',
        'displayTaxFlag' => 'boolean',
        'downPaymentInvoice' => 'Spinen\ConnectWise\Models\v2019_3\Finance\InvoiceTemplateReference',
        'emailTemplate' => 'Spinen\ConnectWise\Models\v2019_3\Finance\EmailTemplateReference',
        'excludeAvalaraFlag' => 'boolean',
        'excludeDoNotBillExpenseFlag' => 'boolean',
        'excludeDoNotBillProductFlag' => 'boolean',
        'excludeDoNotBillTimeFlag' => 'boolean',
        'id' => 'integer',
        'invoiceFooter' => 'string',
        'invoiceTitle' => 'string',
        'localizedCountry' => 'Spinen\ConnectWise\Models\v2019_3\Finance\CountryReference',
        'location' => 'Spinen\ConnectWise\Models\v2019_3\Finance\SystemLocationReference',
        'miscInvoice' => 'Spinen\ConnectWise\Models\v2019_3\Finance\InvoiceTemplateReference',
        'overallInvoiceDefault' => 'Spinen\ConnectWise\Models\v2019_3\Finance\InvoiceTemplateReference',
        'payableName' => 'string',
        'phone' => 'string',
        'prefixSuffixFlag' => 'string',
        'prefixSuffixText' => 'string',
        'printLogoFlag' => 'boolean',
        'progressInvoice' => 'Spinen\ConnectWise\Models\v2019_3\Finance\InvoiceTemplateReference',
        'progressTimeFlag' => 'boolean',
        'quoteFooter' => 'string',
        'readReceiptFlag' => 'boolean',
        'remitName' => 'string',
        'restrictDownpaymentFlag' => 'boolean',
        'restrictProjectDownpaymentFlag' => 'boolean',
        'salesOrderInvoice' => 'Spinen\ConnectWise\Models\v2019_3\Finance\InvoiceTemplateReference',
        'standardInvoiceActual' => 'Spinen\ConnectWise\Models\v2019_3\Finance\InvoiceTemplateReference',
        'standardInvoiceFixed' => 'Spinen\ConnectWise\Models\v2019_3\Finance\InvoiceTemplateReference',
        'state' => 'Spinen\ConnectWise\Models\v2019_3\Finance\StateReference',
        'topcomment' => 'string',
        'zip' => 'string',
    ];
}
