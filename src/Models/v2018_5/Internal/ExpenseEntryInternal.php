<?php

namespace Spinen\ConnectWise\Models\v2018_5\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseEntryInternal Version v2018_5
 * 
 * Model for ExpenseEntryInternal
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_5\Internal\ExpenseReportReference $expenseReport
 * @property Spinen\ConnectWise\Models\v2018_5\Internal\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2018_5\Internal\ChargeToReference $chargeTo
 * @property Spinen\ConnectWise\Models\v2018_5\Internal\ExpenseTypeReference $type
 * @property Spinen\ConnectWise\Models\v2018_5\Internal\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_5\Internal\PaymentMethodReference $paymentMethod
 * @property Spinen\ConnectWise\Models\v2018_5\Internal\ClassificationReference $classification
 * @property number $amount
 * @property string $billableOption
 * @property string $date
 * @property Spinen\ConnectWise\Models\v2018_5\Internal\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2018_5\Internal\SystemDepartmentReference $department
 * @property string $notes
 * @property Spinen\ConnectWise\Models\v2018_5\Internal\AgreementReference $agreement
 * @property number $invoiceAmount
 * @property Spinen\ConnectWise\Models\v2018_5\Internal\Guid $mobileGuid
 * @property array $taxes
 * @property Spinen\ConnectWise\Models\v2018_5\Internal\InvoiceReference $invoice
 * @property string $status
 * @property Spinen\ConnectWise\Models\v2018_5\Internal\CurrencyReference $currency
 * @property number $billAmount
 * @property Spinen\ConnectWise\Models\v2018_5\Internal\Metadata $_info
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
        'expenseReport' => 'Spinen\ConnectWise\Models\v2018_5\Internal\ExpenseReportReference',
        'company' => 'Spinen\ConnectWise\Models\v2018_5\Internal\CompanyReference',
        'chargeTo' => 'Spinen\ConnectWise\Models\v2018_5\Internal\ChargeToReference',
        'type' => 'Spinen\ConnectWise\Models\v2018_5\Internal\ExpenseTypeReference',
        'member' => 'Spinen\ConnectWise\Models\v2018_5\Internal\MemberReference',
        'paymentMethod' => 'Spinen\ConnectWise\Models\v2018_5\Internal\PaymentMethodReference',
        'classification' => 'Spinen\ConnectWise\Models\v2018_5\Internal\ClassificationReference',
        'amount' => 'number',
        'billableOption' => 'string',
        'date' => 'string',
        'location' => 'Spinen\ConnectWise\Models\v2018_5\Internal\SystemLocationReference',
        'department' => 'Spinen\ConnectWise\Models\v2018_5\Internal\SystemDepartmentReference',
        'notes' => 'string',
        'agreement' => 'Spinen\ConnectWise\Models\v2018_5\Internal\AgreementReference',
        'invoiceAmount' => 'number',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2018_5\Internal\Guid',
        'taxes' => 'array',
        'invoice' => 'Spinen\ConnectWise\Models\v2018_5\Internal\InvoiceReference',
        'status' => 'string',
        'currency' => 'Spinen\ConnectWise\Models\v2018_5\Internal\CurrencyReference',
        'billAmount' => 'number',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Internal\Metadata',
    ];
}
