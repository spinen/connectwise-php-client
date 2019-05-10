<?php

namespace Spinen\ConnectWise\Models\v2018_6\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseEntryInternal Version v2018_6
 *
 * Model for ExpenseEntryInternal
 *
 * @property Carbon\Carbon $date
 * @property Spinen\ConnectWise\Models\v2018_6\Internal\AgreementReference $agreement
 * @property Spinen\ConnectWise\Models\v2018_6\Internal\ChargeToReference $chargeTo
 * @property Spinen\ConnectWise\Models\v2018_6\Internal\ClassificationReference $classification
 * @property Spinen\ConnectWise\Models\v2018_6\Internal\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2018_6\Internal\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2018_6\Internal\ExpenseReportReference $expenseReport
 * @property Spinen\ConnectWise\Models\v2018_6\Internal\ExpenseTypeReference $type
 * @property Spinen\ConnectWise\Models\v2018_6\Internal\Guid $mobileGuid
 * @property Spinen\ConnectWise\Models\v2018_6\Internal\InvoiceReference $invoice
 * @property Spinen\ConnectWise\Models\v2018_6\Internal\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_6\Internal\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_6\Internal\PaymentMethodReference $paymentMethod
 * @property Spinen\ConnectWise\Models\v2018_6\Internal\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2018_6\Internal\SystemLocationReference $location
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Internal\Metadata',
        'agreement' => 'Spinen\ConnectWise\Models\v2018_6\Internal\AgreementReference',
        'amount' => 'float',
        'billAmount' => 'float',
        'billableOption' => 'string',
        'chargeTo' => 'Spinen\ConnectWise\Models\v2018_6\Internal\ChargeToReference',
        'classification' => 'Spinen\ConnectWise\Models\v2018_6\Internal\ClassificationReference',
        'company' => 'Spinen\ConnectWise\Models\v2018_6\Internal\CompanyReference',
        'currency' => 'Spinen\ConnectWise\Models\v2018_6\Internal\CurrencyReference',
        'date' => 'Carbon\Carbon',
        'department' => 'Spinen\ConnectWise\Models\v2018_6\Internal\SystemDepartmentReference',
        'expenseReport' => 'Spinen\ConnectWise\Models\v2018_6\Internal\ExpenseReportReference',
        'id' => 'integer',
        'invoice' => 'Spinen\ConnectWise\Models\v2018_6\Internal\InvoiceReference',
        'invoiceAmount' => 'float',
        'location' => 'Spinen\ConnectWise\Models\v2018_6\Internal\SystemLocationReference',
        'member' => 'Spinen\ConnectWise\Models\v2018_6\Internal\MemberReference',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2018_6\Internal\Guid',
        'notes' => 'string',
        'paymentMethod' => 'Spinen\ConnectWise\Models\v2018_6\Internal\PaymentMethodReference',
        'status' => 'string',
        'taxes' => 'array',
        'type' => 'Spinen\ConnectWise\Models\v2018_6\Internal\ExpenseTypeReference',
    ];
}
