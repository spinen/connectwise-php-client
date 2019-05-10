<?php

namespace Spinen\ConnectWise\Models\v2018_6\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Invoice Version v2018_6
 *
 * Model for Invoice
 *
 * @property Carbon\Carbon $date
 * @property Carbon\Carbon $dueDate
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\BillingStatusReference $status
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\BillingTermsReference $billingTerms
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\CompanyReference $billToCompany
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\CompanyReference $shipToCompany
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\SiteReference $billingSite
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\SiteReference $shippingSite
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\TaxCodeReference $taxCode
 * @property array $customFields
 * @property boolean $addToBatchEmailList
 * @property boolean $downpaymentPreviouslyTaxedFlag
 * @property boolean $restrictDownpaymentFlag
 * @property boolean $specialInvoiceFlag
 * @property boolean $taxableFlag
 * @property float $agreementAmount
 * @property float $balance
 * @property float $credits
 * @property float $downpaymentApplied
 * @property float $expenseTotal
 * @property float $payments
 * @property float $previousProgressApplied
 * @property float $productTotal
 * @property float $remainingDownpayment
 * @property float $salesTax
 * @property float $serviceAdjustmentAmount
 * @property float $serviceTotal
 * @property float $subtotal
 * @property float $total
 * @property integer $applyToId
 * @property integer $departmentId
 * @property integer $emailTemplateId
 * @property integer $id
 * @property integer $locationId
 * @property integer $templateSetupId
 * @property integer $territoryId
 * @property string $adjustedBy
 * @property string $adjustmentReason
 * @property string $applyToType
 * @property string $attention
 * @property string $bottomComment
 * @property string $customerPO
 * @property string $internalNotes
 * @property string $invoiceNumber
 * @property string $reference
 * @property string $topComment
 * @property string $type
 */
class Invoice extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Finance\Metadata',
        'addToBatchEmailList' => 'boolean',
        'adjustedBy' => 'string',
        'adjustmentReason' => 'string',
        'agreementAmount' => 'float',
        'applyToId' => 'integer',
        'applyToType' => 'string',
        'attention' => 'string',
        'balance' => 'float',
        'billToCompany' => 'Spinen\ConnectWise\Models\v2018_6\Finance\CompanyReference',
        'billingSite' => 'Spinen\ConnectWise\Models\v2018_6\Finance\SiteReference',
        'billingTerms' => 'Spinen\ConnectWise\Models\v2018_6\Finance\BillingTermsReference',
        'bottomComment' => 'string',
        'company' => 'Spinen\ConnectWise\Models\v2018_6\Finance\CompanyReference',
        'credits' => 'float',
        'currency' => 'Spinen\ConnectWise\Models\v2018_6\Finance\CurrencyReference',
        'customFields' => 'array',
        'customerPO' => 'string',
        'date' => 'Carbon\Carbon',
        'departmentId' => 'integer',
        'downpaymentApplied' => 'float',
        'downpaymentPreviouslyTaxedFlag' => 'boolean',
        'dueDate' => 'Carbon\Carbon',
        'emailTemplateId' => 'integer',
        'expenseTotal' => 'float',
        'id' => 'integer',
        'internalNotes' => 'string',
        'invoiceNumber' => 'string',
        'locationId' => 'integer',
        'payments' => 'float',
        'previousProgressApplied' => 'float',
        'productTotal' => 'float',
        'reference' => 'string',
        'remainingDownpayment' => 'float',
        'restrictDownpaymentFlag' => 'boolean',
        'salesTax' => 'float',
        'serviceAdjustmentAmount' => 'float',
        'serviceTotal' => 'float',
        'shipToCompany' => 'Spinen\ConnectWise\Models\v2018_6\Finance\CompanyReference',
        'shippingSite' => 'Spinen\ConnectWise\Models\v2018_6\Finance\SiteReference',
        'specialInvoiceFlag' => 'boolean',
        'status' => 'Spinen\ConnectWise\Models\v2018_6\Finance\BillingStatusReference',
        'subtotal' => 'float',
        'taxCode' => 'Spinen\ConnectWise\Models\v2018_6\Finance\TaxCodeReference',
        'taxableFlag' => 'boolean',
        'templateSetupId' => 'integer',
        'territoryId' => 'integer',
        'topComment' => 'string',
        'total' => 'float',
        'type' => 'string',
    ];
}
