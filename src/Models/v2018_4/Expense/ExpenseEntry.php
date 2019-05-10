<?php

namespace Spinen\ConnectWise\Models\v2018_4\Expense;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseEntry Version v2018_4
 *
 * Model for ExpenseEntry
 *
 * @property AgreementReference $agreement
 * @property Carbon\Carbon $date
 * @property ClassificationReference $classification
 * @property CompanyReference $company
 * @property ExpenseReportReference $expenseReport
 * @property ExpenseTypeReference $type
 * @property Guid $mobileGuid
 * @property InvoiceReference $invoice
 * @property MemberReference $member
 * @property Metadata $_info
 * @property PaymentMethodReference $paymentMethod
 * @property array $customFields
 * @property array $taxes
 * @property float $amount
 * @property float $invoiceAmount
 * @property integer $businessUnitId
 * @property integer $chargeToId
 * @property integer $id
 * @property integer $locationId
 * @property string $billableOption
 * @property string $chargeToType
 * @property string $notes
 */
class ExpenseEntry extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'agreement' => AgreementReference::class,
        'amount' => 'float',
        'billableOption' => 'string',
        'businessUnitId' => 'integer',
        'chargeToId' => 'integer',
        'chargeToType' => 'string',
        'classification' => ClassificationReference::class,
        'company' => CompanyReference::class,
        'customFields' => 'array',
        'date' => Carbon\Carbon::class,
        'expenseReport' => ExpenseReportReference::class,
        'id' => 'integer',
        'invoice' => InvoiceReference::class,
        'invoiceAmount' => 'float',
        'locationId' => 'integer',
        'member' => MemberReference::class,
        'mobileGuid' => Guid::class,
        'notes' => 'string',
        'paymentMethod' => PaymentMethodReference::class,
        'taxes' => 'array',
        'type' => ExpenseTypeReference::class,
    ];
}
