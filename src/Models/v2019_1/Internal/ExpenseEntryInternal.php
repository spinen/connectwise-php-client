<?php

namespace Spinen\ConnectWise\Models\v2019_1\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseEntryInternal Version v2019_1
 * 
 * Model for ExpenseEntryInternal
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\ExpenseReportReference $expenseReport
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\ChargeToReference $chargeTo
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\ExpenseTypeReference $type
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\PaymentMethodReference $paymentMethod
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\ClassificationReference $classification
 * @property float $amount
 * @property string $billableOption
 * @property Carbon\Carbon $date
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\SystemDepartmentReference $department
 * @property string $notes
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\AgreementReference $agreement
 * @property float $invoiceAmount
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\Guid $mobileGuid
 * @property array $taxes
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\InvoiceReference $invoice
 * @property string $status
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\CurrencyReference $currency
 * @property float $billAmount
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\Metadata $_info
 */
class ExpenseEntryInternal extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'expenseReport' => 'Spinen\ConnectWise\Models\v2019_1\Internal\ExpenseReportReference',
        'company' => 'Spinen\ConnectWise\Models\v2019_1\Internal\CompanyReference',
        'chargeTo' => 'Spinen\ConnectWise\Models\v2019_1\Internal\ChargeToReference',
        'type' => 'Spinen\ConnectWise\Models\v2019_1\Internal\ExpenseTypeReference',
        'member' => 'Spinen\ConnectWise\Models\v2019_1\Internal\MemberReference',
        'paymentMethod' => 'Spinen\ConnectWise\Models\v2019_1\Internal\PaymentMethodReference',
        'classification' => 'Spinen\ConnectWise\Models\v2019_1\Internal\ClassificationReference',
        'amount' => 'float',
        'billableOption' => 'string',
        'date' => 'Carbon\Carbon',
        'location' => 'Spinen\ConnectWise\Models\v2019_1\Internal\SystemLocationReference',
        'department' => 'Spinen\ConnectWise\Models\v2019_1\Internal\SystemDepartmentReference',
        'notes' => 'string',
        'agreement' => 'Spinen\ConnectWise\Models\v2019_1\Internal\AgreementReference',
        'invoiceAmount' => 'float',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2019_1\Internal\Guid',
        'taxes' => 'array',
        'invoice' => 'Spinen\ConnectWise\Models\v2019_1\Internal\InvoiceReference',
        'status' => 'string',
        'currency' => 'Spinen\ConnectWise\Models\v2019_1\Internal\CurrencyReference',
        'billAmount' => 'float',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Internal\Metadata',
    ];
}
