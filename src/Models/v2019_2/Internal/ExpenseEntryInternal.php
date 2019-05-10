<?php

namespace Spinen\ConnectWise\Models\v2019_2\Internal;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseEntryInternal Version v2019_2
 *
 * Model for ExpenseEntryInternal
 *
 * @property AgreementReference $agreement
 * @property Carbon $date
 * @property ChargeToReference $chargeTo
 * @property ClassificationReference $classification
 * @property CompanyReference $company
 * @property CurrencyReference $currency
 * @property ExpenseReportReference $expenseReport
 * @property ExpenseTypeReference $type
 * @property Guid $mobileGuid
 * @property InvoiceReference $invoice
 * @property MemberReference $member
 * @property Metadata $_info
 * @property PaymentMethodReference $paymentMethod
 * @property SystemDepartmentReference $department
 * @property SystemLocationReference $location
 * @property array $taxes
 * @property float $amount
 * @property float $billAmount
 * @property float $invoiceAmount
 * @property integer $id
 * @property string $billableOption
 * @property string $notes
 * @property string $status
 */
class ExpenseEntryInternal extends Model
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
        'billAmount' => 'float',
        'billableOption' => 'string',
        'chargeTo' => ChargeToReference::class,
        'classification' => ClassificationReference::class,
        'company' => CompanyReference::class,
        'currency' => CurrencyReference::class,
        'date' => Carbon::class,
        'department' => SystemDepartmentReference::class,
        'expenseReport' => ExpenseReportReference::class,
        'id' => 'integer',
        'invoice' => InvoiceReference::class,
        'invoiceAmount' => 'float',
        'location' => SystemLocationReference::class,
        'member' => MemberReference::class,
        'mobileGuid' => Guid::class,
        'notes' => 'string',
        'paymentMethod' => PaymentMethodReference::class,
        'status' => 'string',
        'taxes' => 'array',
        'type' => ExpenseTypeReference::class
    ];
}
