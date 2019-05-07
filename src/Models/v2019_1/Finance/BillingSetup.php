<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BillingSetup
 *
 * @property integer $id
 * @property string $remitName
 * @property string $addressOne
 * @property string $addressTwo
 * @property string $city
 * @property string $zip
 * @property string $phone
 * @property string $invoiceTitle
 * @property string $payableName
 * @property string $topcomment
 * @property string $invoiceFooter
 * @property string $quoteFooter
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
 * @property string $businessNumber
 * @property string $customLabel
 * @property string $customText
 * @property string $companyCode
 * @property boolean $excludeAvalaraFlag
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
