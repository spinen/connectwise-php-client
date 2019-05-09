<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BillingSetup Version v2019_1
 * 
 * Model for BillingSetup
 *
 * @property integer $id
 * @property string $remitName
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\SystemLocationReference $location
 * @property string $addressOne
 * @property string $addressTwo
 * @property string $city
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\StateReference $state
 * @property string $zip
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\CountryReference $country
 * @property string $phone
 * @property string $invoiceTitle
 * @property string $payableName
 * @property string $topcomment
 * @property string $invoiceFooter
 * @property string $quoteFooter
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\InvoiceTemplateReference $overallInvoiceDefault
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\InvoiceTemplateReference $standardInvoiceActual
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\InvoiceTemplateReference $standardInvoiceFixed
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\InvoiceTemplateReference $progressInvoice
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\InvoiceTemplateReference $agreementInvoice
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\InvoiceTemplateReference $creditMemoInvoice
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\InvoiceTemplateReference $downPaymentInvoice
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\InvoiceTemplateReference $miscInvoice
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\InvoiceTemplateReference $salesOrderInvoice
 * @property boolean $excludeDoNotBillTimeFlag
 * @property boolean $excludeDoNotBillExpenseFlag
 * @property boolean $excludeDoNotBillProductFlag
 * @property string $prefixSuffixFlag
 * @property string $prefixSuffixText
 * @property boolean $chargeAdjToFirmFlag
 * @property boolean $NoWatermarkFlag
 * @property boolean $displayTaxFlag
 * @property boolean $allowRestrictedDeptOnRoutingFlag
 * @property boolean $billTicketSeparatelyFlag
 * @property boolean $billTicketCompleteFlag
 * @property boolean $billTicketUnapprovedFlag
 * @property boolean $billProjectCompleteFlag
 * @property boolean $billProjectUnapprovedFlag
 * @property boolean $progressTimeFlag
 * @property boolean $restrictProjectDownpaymentFlag
 * @property boolean $billSalesOrderCompleteFlag
 * @property boolean $billProductAfterShipFlag
 * @property boolean $restrictDownpaymentFlag
 * @property boolean $copyNonServiceProductsFlag
 * @property boolean $copyServiceProductsFlag
 * @property boolean $copyAgreementProductsFlag
 * @property boolean $printLogoFlag
 * @property boolean $readReceiptFlag
 * @property boolean $deliveryReceiptFlag
 * @property boolean $disableRoutingEmailFlag
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\EmailTemplateReference $emailTemplate
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\CountryReference $localizedCountry
 * @property string $businessNumber
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\CurrencyReference $currency
 * @property string $customLabel
 * @property string $customText
 * @property string $companyCode
 * @property boolean $excludeAvalaraFlag
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\Metadata $_info
 */
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
        'location' => 'Spinen\ConnectWise\Models\v2019_1\Finance\SystemLocationReference',
        'addressOne' => 'string',
        'addressTwo' => 'string',
        'city' => 'string',
        'state' => 'Spinen\ConnectWise\Models\v2019_1\Finance\StateReference',
        'zip' => 'string',
        'country' => 'Spinen\ConnectWise\Models\v2019_1\Finance\CountryReference',
        'phone' => 'string',
        'invoiceTitle' => 'string',
        'payableName' => 'string',
        'topcomment' => 'string',
        'invoiceFooter' => 'string',
        'quoteFooter' => 'string',
        'overallInvoiceDefault' => 'Spinen\ConnectWise\Models\v2019_1\Finance\InvoiceTemplateReference',
        'standardInvoiceActual' => 'Spinen\ConnectWise\Models\v2019_1\Finance\InvoiceTemplateReference',
        'standardInvoiceFixed' => 'Spinen\ConnectWise\Models\v2019_1\Finance\InvoiceTemplateReference',
        'progressInvoice' => 'Spinen\ConnectWise\Models\v2019_1\Finance\InvoiceTemplateReference',
        'agreementInvoice' => 'Spinen\ConnectWise\Models\v2019_1\Finance\InvoiceTemplateReference',
        'creditMemoInvoice' => 'Spinen\ConnectWise\Models\v2019_1\Finance\InvoiceTemplateReference',
        'downPaymentInvoice' => 'Spinen\ConnectWise\Models\v2019_1\Finance\InvoiceTemplateReference',
        'miscInvoice' => 'Spinen\ConnectWise\Models\v2019_1\Finance\InvoiceTemplateReference',
        'salesOrderInvoice' => 'Spinen\ConnectWise\Models\v2019_1\Finance\InvoiceTemplateReference',
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
        'emailTemplate' => 'Spinen\ConnectWise\Models\v2019_1\Finance\EmailTemplateReference',
        'localizedCountry' => 'Spinen\ConnectWise\Models\v2019_1\Finance\CountryReference',
        'businessNumber' => 'string',
        'currency' => 'Spinen\ConnectWise\Models\v2019_1\Finance\CurrencyReference',
        'customLabel' => 'string',
        'customText' => 'string',
        'companyCode' => 'string',
        'excludeAvalaraFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Finance\Metadata',
    ];
}
