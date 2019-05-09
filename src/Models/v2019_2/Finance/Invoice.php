<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Invoice Version v2019_2
 * 
 * Model for Invoice
 *
 * @property integer $id
 * @property string $invoiceNumber
 * @property string $type
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\BillingStatusReference $status
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\CompanyReference $billToCompany
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\CompanyReference $shipToCompany
 * @property string $applyToType
 * @property integer $applyToId
 * @property string $attention
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\SiteReference $billingSite
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\SiteReference $shippingSite
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\BillingTermsReference $billingTerms
 * @property string $reference
 * @property string $customerPO
 * @property integer $templateSetupId
 * @property integer $emailTemplateId
 * @property boolean $addToBatchEmailList
 * @property string $date
 * @property boolean $restrictDownpaymentFlag
 * @property integer $locationId
 * @property integer $departmentId
 * @property integer $territoryId
 * @property string $topComment
 * @property string $bottomComment
 * @property boolean $taxableFlag
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\TaxCodeReference $taxCode
 * @property string $internalNotes
 * @property boolean $downpaymentPreviouslyTaxedFlag
 * @property number $serviceTotal
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\CurrencyReference $currency
 * @property string $dueDate
 * @property number $expenseTotal
 * @property number $productTotal
 * @property number $previousProgressApplied
 * @property number $serviceAdjustmentAmount
 * @property number $agreementAmount
 * @property number $downpaymentApplied
 * @property number $subtotal
 * @property number $total
 * @property number $remainingDownpayment
 * @property number $salesTax
 * @property string $adjustmentReason
 * @property string $adjustedBy
 * @property number $payments
 * @property number $credits
 * @property number $balance
 * @property boolean $specialInvoiceFlag
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\Metadata $_info
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
        'status' => 'Spinen\ConnectWise\Models\v2019_2\Finance\BillingStatusReference',
        'company' => 'Spinen\ConnectWise\Models\v2019_2\Finance\CompanyReference',
        'billToCompany' => 'Spinen\ConnectWise\Models\v2019_2\Finance\CompanyReference',
        'shipToCompany' => 'Spinen\ConnectWise\Models\v2019_2\Finance\CompanyReference',
        'applyToType' => 'string',
        'applyToId' => 'integer',
        'attention' => 'string',
        'billingSite' => 'Spinen\ConnectWise\Models\v2019_2\Finance\SiteReference',
        'shippingSite' => 'Spinen\ConnectWise\Models\v2019_2\Finance\SiteReference',
        'billingTerms' => 'Spinen\ConnectWise\Models\v2019_2\Finance\BillingTermsReference',
        'reference' => 'string',
        'customerPO' => 'string',
        'templateSetupId' => 'integer',
        'emailTemplateId' => 'integer',
        'addToBatchEmailList' => 'boolean',
        'date' => 'string',
        'restrictDownpaymentFlag' => 'boolean',
        'locationId' => 'integer',
        'departmentId' => 'integer',
        'territoryId' => 'integer',
        'topComment' => 'string',
        'bottomComment' => 'string',
        'taxableFlag' => 'boolean',
        'taxCode' => 'Spinen\ConnectWise\Models\v2019_2\Finance\TaxCodeReference',
        'internalNotes' => 'string',
        'downpaymentPreviouslyTaxedFlag' => 'boolean',
        'serviceTotal' => 'number',
        'currency' => 'Spinen\ConnectWise\Models\v2019_2\Finance\CurrencyReference',
        'dueDate' => 'string',
        'expenseTotal' => 'number',
        'productTotal' => 'number',
        'previousProgressApplied' => 'number',
        'serviceAdjustmentAmount' => 'number',
        'agreementAmount' => 'number',
        'downpaymentApplied' => 'number',
        'subtotal' => 'number',
        'total' => 'number',
        'remainingDownpayment' => 'number',
        'salesTax' => 'number',
        'adjustmentReason' => 'string',
        'adjustedBy' => 'string',
        'payments' => 'number',
        'credits' => 'number',
        'balance' => 'number',
        'specialInvoiceFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Finance\Metadata',
        'customFields' => 'array',
    ];
}
