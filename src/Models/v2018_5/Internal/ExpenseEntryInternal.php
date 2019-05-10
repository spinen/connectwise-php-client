<?php

namespace Spinen\ConnectWise\Models\v2018_5\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseEntryInternal Version v2018_5
 *
 * Model for ExpenseEntryInternal
 *
 * @property Carbon\Carbon $date
 * @property Spinen\ConnectWise\Models\v2018_5\Internal\AgreementReference $agreement
 * @property Spinen\ConnectWise\Models\v2018_5\Internal\ChargeToReference $chargeTo
 * @property Spinen\ConnectWise\Models\v2018_5\Internal\ClassificationReference $classification
 * @property Spinen\ConnectWise\Models\v2018_5\Internal\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2018_5\Internal\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2018_5\Internal\ExpenseReportReference $expenseReport
 * @property Spinen\ConnectWise\Models\v2018_5\Internal\ExpenseTypeReference $type
 * @property Spinen\ConnectWise\Models\v2018_5\Internal\Guid $mobileGuid
 * @property Spinen\ConnectWise\Models\v2018_5\Internal\InvoiceReference $invoice
 * @property Spinen\ConnectWise\Models\v2018_5\Internal\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_5\Internal\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_5\Internal\PaymentMethodReference $paymentMethod
 * @property Spinen\ConnectWise\Models\v2018_5\Internal\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2018_5\Internal\SystemLocationReference $location
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Internal\Metadata',
        'agreement' => 'Spinen\ConnectWise\Models\v2018_5\Internal\AgreementReference',
        'amount' => 'float',
        'billAmount' => 'float',
        'billableOption' => 'string',
        'chargeTo' => 'Spinen\ConnectWise\Models\v2018_5\Internal\ChargeToReference',
        'classification' => 'Spinen\ConnectWise\Models\v2018_5\Internal\ClassificationReference',
        'company' => 'Spinen\ConnectWise\Models\v2018_5\Internal\CompanyReference',
        'currency' => 'Spinen\ConnectWise\Models\v2018_5\Internal\CurrencyReference',
        'date' => 'Carbon\Carbon',
        'department' => 'Spinen\ConnectWise\Models\v2018_5\Internal\SystemDepartmentReference',
        'expenseReport' => 'Spinen\ConnectWise\Models\v2018_5\Internal\ExpenseReportReference',
        'id' => 'integer',
        'invoice' => 'Spinen\ConnectWise\Models\v2018_5\Internal\InvoiceReference',
        'invoiceAmount' => 'float',
        'location' => 'Spinen\ConnectWise\Models\v2018_5\Internal\SystemLocationReference',
        'member' => 'Spinen\ConnectWise\Models\v2018_5\Internal\MemberReference',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2018_5\Internal\Guid',
        'notes' => 'string',
        'paymentMethod' => 'Spinen\ConnectWise\Models\v2018_5\Internal\PaymentMethodReference',
        'status' => 'string',
        'taxes' => 'array',
        'type' => 'Spinen\ConnectWise\Models\v2018_5\Internal\ExpenseTypeReference',
    ];
}
