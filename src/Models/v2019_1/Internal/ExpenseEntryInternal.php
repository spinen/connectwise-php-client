<?php

namespace Spinen\ConnectWise\Models\v2019_1\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseEntryInternal Version v2019_1
 *
 * Model for ExpenseEntryInternal
 *
 * @property Carbon\Carbon $date
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\AgreementReference $agreement
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\ChargeToReference $chargeTo
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\ClassificationReference $classification
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\ExpenseReportReference $expenseReport
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\ExpenseTypeReference $type
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\Guid $mobileGuid
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\InvoiceReference $invoice
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\PaymentMethodReference $paymentMethod
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\SystemLocationReference $location
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Internal\Metadata',
        'agreement' => 'Spinen\ConnectWise\Models\v2019_1\Internal\AgreementReference',
        'amount' => 'float',
        'billAmount' => 'float',
        'billableOption' => 'string',
        'chargeTo' => 'Spinen\ConnectWise\Models\v2019_1\Internal\ChargeToReference',
        'classification' => 'Spinen\ConnectWise\Models\v2019_1\Internal\ClassificationReference',
        'company' => 'Spinen\ConnectWise\Models\v2019_1\Internal\CompanyReference',
        'currency' => 'Spinen\ConnectWise\Models\v2019_1\Internal\CurrencyReference',
        'date' => 'Carbon\Carbon',
        'department' => 'Spinen\ConnectWise\Models\v2019_1\Internal\SystemDepartmentReference',
        'expenseReport' => 'Spinen\ConnectWise\Models\v2019_1\Internal\ExpenseReportReference',
        'id' => 'integer',
        'invoice' => 'Spinen\ConnectWise\Models\v2019_1\Internal\InvoiceReference',
        'invoiceAmount' => 'float',
        'location' => 'Spinen\ConnectWise\Models\v2019_1\Internal\SystemLocationReference',
        'member' => 'Spinen\ConnectWise\Models\v2019_1\Internal\MemberReference',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2019_1\Internal\Guid',
        'notes' => 'string',
        'paymentMethod' => 'Spinen\ConnectWise\Models\v2019_1\Internal\PaymentMethodReference',
        'status' => 'string',
        'taxes' => 'array',
        'type' => 'Spinen\ConnectWise\Models\v2019_1\Internal\ExpenseTypeReference',
    ];
}
