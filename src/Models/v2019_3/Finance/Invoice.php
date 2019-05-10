<?php

namespace Spinen\ConnectWise\Models\v2019_3\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Invoice Version v2019_3
 * 
 * Model for Invoice
 *
 * @property integer $id
 * @property string $invoiceNumber
 * @property string $type
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\BillingStatusReference $status
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\CompanyReference $billToCompany
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\CompanyReference $shipToCompany
 * @property string $applyToType
 * @property integer $applyToId
 * @property string $attention
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\SiteReference $billingSite
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\SiteReference $shippingSite
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\BillingTermsReference $billingTerms
 * @property string $reference
 * @property string $customerPO
 * @property integer $templateSetupId
 * @property integer $emailTemplateId
 * @property boolean $addToBatchEmailList
 * @property Carbon\Carbon $date
 * @property boolean $restrictDownpaymentFlag
 * @property integer $locationId
 * @property integer $departmentId
 * @property integer $territoryId
 * @property string $topComment
 * @property string $bottomComment
 * @property boolean $taxableFlag
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\TaxCodeReference $taxCode
 * @property string $internalNotes
 * @property boolean $downpaymentPreviouslyTaxedFlag
 * @property float $serviceTotal
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\CurrencyReference $currency
 * @property Carbon\Carbon $dueDate
 * @property float $expenseTotal
 * @property float $productTotal
 * @property float $previousProgressApplied
 * @property float $serviceAdjustmentAmount
 * @property float $agreementAmount
 * @property float $downpaymentApplied
 * @property float $subtotal
 * @property float $total
 * @property float $remainingDownpayment
 * @property float $salesTax
 * @property string $adjustmentReason
 * @property string $adjustedBy
 * @property float $payments
 * @property float $credits
 * @property float $balance
 * @property boolean $specialInvoiceFlag
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\Metadata $_info
 * @property array $customFields
 */
class Invoice extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'invoiceNumber' => 'string',
        'type' => 'string',
        'status' => 'Spinen\ConnectWise\Models\v2019_3\Finance\BillingStatusReference',
        'company' => 'Spinen\ConnectWise\Models\v2019_3\Finance\CompanyReference',
        'billToCompany' => 'Spinen\ConnectWise\Models\v2019_3\Finance\CompanyReference',
        'shipToCompany' => 'Spinen\ConnectWise\Models\v2019_3\Finance\CompanyReference',
        'applyToType' => 'string',
        'applyToId' => 'integer',
        'attention' => 'string',
        'billingSite' => 'Spinen\ConnectWise\Models\v2019_3\Finance\SiteReference',
        'shippingSite' => 'Spinen\ConnectWise\Models\v2019_3\Finance\SiteReference',
        'billingTerms' => 'Spinen\ConnectWise\Models\v2019_3\Finance\BillingTermsReference',
        'reference' => 'string',
        'customerPO' => 'string',
        'templateSetupId' => 'integer',
        'emailTemplateId' => 'integer',
        'addToBatchEmailList' => 'boolean',
        'date' => 'Carbon\Carbon',
        'restrictDownpaymentFlag' => 'boolean',
        'locationId' => 'integer',
        'departmentId' => 'integer',
        'territoryId' => 'integer',
        'topComment' => 'string',
        'bottomComment' => 'string',
        'taxableFlag' => 'boolean',
        'taxCode' => 'Spinen\ConnectWise\Models\v2019_3\Finance\TaxCodeReference',
        'internalNotes' => 'string',
        'downpaymentPreviouslyTaxedFlag' => 'boolean',
        'serviceTotal' => 'float',
        'currency' => 'Spinen\ConnectWise\Models\v2019_3\Finance\CurrencyReference',
        'dueDate' => 'Carbon\Carbon',
        'expenseTotal' => 'float',
        'productTotal' => 'float',
        'previousProgressApplied' => 'float',
        'serviceAdjustmentAmount' => 'float',
        'agreementAmount' => 'float',
        'downpaymentApplied' => 'float',
        'subtotal' => 'float',
        'total' => 'float',
        'remainingDownpayment' => 'float',
        'salesTax' => 'float',
        'adjustmentReason' => 'string',
        'adjustedBy' => 'string',
        'payments' => 'float',
        'credits' => 'float',
        'balance' => 'float',
        'specialInvoiceFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Finance\Metadata',
        'customFields' => 'array',
    ];
}
