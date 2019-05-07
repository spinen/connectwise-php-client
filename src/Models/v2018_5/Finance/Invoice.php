<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Invoice
 *
 * @property integer $id
 * @property string $invoiceNumber
 * @property string $type
 * @property string $applyToType
 * @property integer $applyToId
 * @property string $attention
 * @property string $reference
 * @property string $customerPO
 * @property integer $templateSetupId
 * @property integer $emailTemplateId
 * @property boolean $addToBatchEmailList
 * @property carbon $date
 * @property boolean $restrictDownpaymentFlag
 * @property integer $locationId
 * @property integer $departmentId
 * @property integer $territoryId
 * @property string $topComment
 * @property string $bottomComment
 * @property boolean $taxableFlag
 * @property string $internalNotes
 * @property boolean $downpaymentPreviouslyTaxedFlag
 * @property double $serviceTotal
 * @property carbon $dueDate
 * @property double $expenseTotal
 * @property double $productTotal
 * @property double $previousProgressApplied
 * @property double $serviceAdjustmentAmount
 * @property double $agreementAmount
 * @property double $downpaymentApplied
 * @property double $subtotal
 * @property double $total
 * @property double $remainingDownpayment
 * @property double $salesTax
 * @property string $adjustmentReason
 * @property string $adjustedBy
 * @property double $payments
 * @property double $credits
 * @property double $balance
 * @property boolean $specialInvoiceFlag
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
        'applyToType' => 'string',
        'applyToId' => 'integer',
        'attention' => 'string',
        'reference' => 'string',
        'customerPO' => 'string',
        'templateSetupId' => 'integer',
        'emailTemplateId' => 'integer',
        'addToBatchEmailList' => 'boolean',
        'date' => 'carbon',
        'restrictDownpaymentFlag' => 'boolean',
        'locationId' => 'integer',
        'departmentId' => 'integer',
        'territoryId' => 'integer',
        'topComment' => 'string',
        'bottomComment' => 'string',
        'taxableFlag' => 'boolean',
        'internalNotes' => 'string',
        'downpaymentPreviouslyTaxedFlag' => 'boolean',
        'serviceTotal' => 'double',
        'dueDate' => 'carbon',
        'expenseTotal' => 'double',
        'productTotal' => 'double',
        'previousProgressApplied' => 'double',
        'serviceAdjustmentAmount' => 'double',
        'agreementAmount' => 'double',
        'downpaymentApplied' => 'double',
        'subtotal' => 'double',
        'total' => 'double',
        'remainingDownpayment' => 'double',
        'salesTax' => 'double',
        'adjustmentReason' => 'string',
        'adjustedBy' => 'string',
        'payments' => 'double',
        'credits' => 'double',
        'balance' => 'double',
        'specialInvoiceFlag' => 'boolean',
        'customFields' => 'array',
    ];
}
