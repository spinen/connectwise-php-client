<?php

namespace Spinen\ConnectWise\Models\v2019_3\Expense;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseEntry Version v2019_3
 *
 * Model for ExpenseEntry
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_3\Expense\ExpenseReportReference $expenseReport
 * @property Spinen\ConnectWise\Models\v2019_3\Expense\CompanyReference $company
 * @property integer $chargeToId
 * @property string $chargeToType
 * @property Spinen\ConnectWise\Models\v2019_3\Expense\ExpenseTypeReference $type
 * @property Spinen\ConnectWise\Models\v2019_3\Expense\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_3\Expense\PaymentMethodReference $paymentMethod
 * @property Spinen\ConnectWise\Models\v2019_3\Expense\ClassificationReference $classification
 * @property float $amount
 * @property string $billableOption
 * @property Carbon\Carbon $date
 * @property integer $locationId
 * @property integer $businessUnitId
 * @property string $notes
 * @property Spinen\ConnectWise\Models\v2019_3\Expense\AgreementReference $agreement
 * @property float $invoiceAmount
 * @property Spinen\ConnectWise\Models\v2019_3\Expense\Guid $mobileGuid
 * @property array $taxes
 * @property Spinen\ConnectWise\Models\v2019_3\Expense\InvoiceReference $invoice
 * @property Spinen\ConnectWise\Models\v2019_3\Expense\CurrencyReference $currency
 * @property string $status
 * @property float $billAmount
 * @property Spinen\ConnectWise\Models\v2019_3\Expense\Metadata $_info
 * @property array $customFields
 */
class ExpenseEntry extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'expenseReport' => 'Spinen\ConnectWise\Models\v2019_3\Expense\ExpenseReportReference',
        'company' => 'Spinen\ConnectWise\Models\v2019_3\Expense\CompanyReference',
        'chargeToId' => 'integer',
        'chargeToType' => 'string',
        'type' => 'Spinen\ConnectWise\Models\v2019_3\Expense\ExpenseTypeReference',
        'member' => 'Spinen\ConnectWise\Models\v2019_3\Expense\MemberReference',
        'paymentMethod' => 'Spinen\ConnectWise\Models\v2019_3\Expense\PaymentMethodReference',
        'classification' => 'Spinen\ConnectWise\Models\v2019_3\Expense\ClassificationReference',
        'amount' => 'float',
        'billableOption' => 'string',
        'date' => 'Carbon\Carbon',
        'locationId' => 'integer',
        'businessUnitId' => 'integer',
        'notes' => 'string',
        'agreement' => 'Spinen\ConnectWise\Models\v2019_3\Expense\AgreementReference',
        'invoiceAmount' => 'float',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2019_3\Expense\Guid',
        'taxes' => 'array',
        'invoice' => 'Spinen\ConnectWise\Models\v2019_3\Expense\InvoiceReference',
        'currency' => 'Spinen\ConnectWise\Models\v2019_3\Expense\CurrencyReference',
        'status' => 'string',
        'billAmount' => 'float',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Expense\Metadata',
        'customFields' => 'array',
    ];
}
