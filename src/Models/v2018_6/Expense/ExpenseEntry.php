<?php

namespace Spinen\ConnectWise\Models\v2018_6\Expense;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseEntry Version v2018_6
 *
 * Model for ExpenseEntry
 *
 * @property Carbon\Carbon $date
 * @property Spinen\ConnectWise\Models\v2018_6\Expense\AgreementReference $agreement
 * @property Spinen\ConnectWise\Models\v2018_6\Expense\ClassificationReference $classification
 * @property Spinen\ConnectWise\Models\v2018_6\Expense\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2018_6\Expense\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2018_6\Expense\ExpenseReportReference $expenseReport
 * @property Spinen\ConnectWise\Models\v2018_6\Expense\ExpenseTypeReference $type
 * @property Spinen\ConnectWise\Models\v2018_6\Expense\Guid $mobileGuid
 * @property Spinen\ConnectWise\Models\v2018_6\Expense\InvoiceReference $invoice
 * @property Spinen\ConnectWise\Models\v2018_6\Expense\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_6\Expense\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_6\Expense\PaymentMethodReference $paymentMethod
 * @property array $customFields
 * @property array $taxes
 * @property float $amount
 * @property float $billAmount
 * @property float $invoiceAmount
 * @property integer $businessUnitId
 * @property integer $chargeToId
 * @property integer $id
 * @property integer $locationId
 * @property string $billableOption
 * @property string $chargeToType
 * @property string $notes
 * @property string $status
 */
class ExpenseEntry extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Expense\Metadata',
        'agreement' => 'Spinen\ConnectWise\Models\v2018_6\Expense\AgreementReference',
        'amount' => 'float',
        'billAmount' => 'float',
        'billableOption' => 'string',
        'businessUnitId' => 'integer',
        'chargeToId' => 'integer',
        'chargeToType' => 'string',
        'classification' => 'Spinen\ConnectWise\Models\v2018_6\Expense\ClassificationReference',
        'company' => 'Spinen\ConnectWise\Models\v2018_6\Expense\CompanyReference',
        'currency' => 'Spinen\ConnectWise\Models\v2018_6\Expense\CurrencyReference',
        'customFields' => 'array',
        'date' => 'Carbon\Carbon',
        'expenseReport' => 'Spinen\ConnectWise\Models\v2018_6\Expense\ExpenseReportReference',
        'id' => 'integer',
        'invoice' => 'Spinen\ConnectWise\Models\v2018_6\Expense\InvoiceReference',
        'invoiceAmount' => 'float',
        'locationId' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2018_6\Expense\MemberReference',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2018_6\Expense\Guid',
        'notes' => 'string',
        'paymentMethod' => 'Spinen\ConnectWise\Models\v2018_6\Expense\PaymentMethodReference',
        'status' => 'string',
        'taxes' => 'array',
        'type' => 'Spinen\ConnectWise\Models\v2018_6\Expense\ExpenseTypeReference',
    ];
}
