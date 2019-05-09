<?php

namespace Spinen\ConnectWise\Models\v2019_2\Expense;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseEntry Version v2019_2
 * 
 * Model for ExpenseEntry
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_2\Expense\ExpenseReportReference $expenseReport
 * @property Spinen\ConnectWise\Models\v2019_2\Expense\CompanyReference $company
 * @property integer $chargeToId
 * @property string $chargeToType
 * @property Spinen\ConnectWise\Models\v2019_2\Expense\ExpenseTypeReference $type
 * @property Spinen\ConnectWise\Models\v2019_2\Expense\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_2\Expense\PaymentMethodReference $paymentMethod
 * @property Spinen\ConnectWise\Models\v2019_2\Expense\ClassificationReference $classification
 * @property number $amount
 * @property string $billableOption
 * @property string $date
 * @property integer $locationId
 * @property integer $businessUnitId
 * @property string $notes
 * @property Spinen\ConnectWise\Models\v2019_2\Expense\AgreementReference $agreement
 * @property number $invoiceAmount
 * @property Spinen\ConnectWise\Models\v2019_2\Expense\Guid $mobileGuid
 * @property array $taxes
 * @property Spinen\ConnectWise\Models\v2019_2\Expense\InvoiceReference $invoice
 * @property Spinen\ConnectWise\Models\v2019_2\Expense\CurrencyReference $currency
 * @property string $status
 * @property number $billAmount
 * @property Spinen\ConnectWise\Models\v2019_2\Expense\Metadata $_info
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
        'expenseReport' => 'Spinen\ConnectWise\Models\v2019_2\Expense\ExpenseReportReference',
        'company' => 'Spinen\ConnectWise\Models\v2019_2\Expense\CompanyReference',
        'chargeToId' => 'integer',
        'chargeToType' => 'string',
        'type' => 'Spinen\ConnectWise\Models\v2019_2\Expense\ExpenseTypeReference',
        'member' => 'Spinen\ConnectWise\Models\v2019_2\Expense\MemberReference',
        'paymentMethod' => 'Spinen\ConnectWise\Models\v2019_2\Expense\PaymentMethodReference',
        'classification' => 'Spinen\ConnectWise\Models\v2019_2\Expense\ClassificationReference',
        'amount' => 'number',
        'billableOption' => 'string',
        'date' => 'string',
        'locationId' => 'integer',
        'businessUnitId' => 'integer',
        'notes' => 'string',
        'agreement' => 'Spinen\ConnectWise\Models\v2019_2\Expense\AgreementReference',
        'invoiceAmount' => 'number',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2019_2\Expense\Guid',
        'taxes' => 'array',
        'invoice' => 'Spinen\ConnectWise\Models\v2019_2\Expense\InvoiceReference',
        'currency' => 'Spinen\ConnectWise\Models\v2019_2\Expense\CurrencyReference',
        'status' => 'string',
        'billAmount' => 'number',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Expense\Metadata',
        'customFields' => 'array',
    ];
}
