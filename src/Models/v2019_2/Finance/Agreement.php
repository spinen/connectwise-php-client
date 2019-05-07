<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Agreement
 *
 * @property integer $id
 * @property string $name
 * @property string $customerPO
 * @property boolean $restrictLocationFlag
 * @property boolean $restrictDepartmentFlag
 * @property carbon $startDate
 * @property carbon $endDate
 * @property boolean $noEndingDateFlag
 * @property boolean $cancelledFlag
 * @property carbon $dateCancelled
 * @property string $reasonCancelled
 * @property string $workOrder
 * @property string $internalNotes
 * @property string $applicationUnits
 * @property double $applicationLimit
 * @property string $applicationCycle
 * @property boolean $applicationUnlimitedFlag
 * @property boolean $oneTimeFlag
 * @property boolean $coverAgreementTime
 * @property boolean $coverAgreementProduct
 * @property boolean $coverAgreementExpense
 * @property boolean $coverSalesTax
 * @property boolean $carryOverUnused
 * @property boolean $allowOverruns
 * @property integer $expiredDays
 * @property integer $limit
 * @property boolean $expireWhenZero
 * @property boolean $chargeToFirm
 * @property string $employeeCompRate
 * @property string $employeeCompNotExceed
 * @property double $compHourlyRate
 * @property double $compLimitAmount
 * @property boolean $billOneTimeFlag
 * @property string $invoicingCycle
 * @property double $billAmount
 * @property boolean $taxable
 * @property double $prorateFirstBill
 * @property carbon $billStartDate
 * @property boolean $restrictDownPayment
 * @property boolean $prorateFlag
 * @property string $invoiceDescription
 * @property boolean $topComment
 * @property boolean $bottomComment
 * @property string $billTime
 * @property string $billExpenses
 * @property string $billProducts
 * @property boolean $billableTimeInvoice
 * @property boolean $billableExpenseInvoice
 * @property boolean $billableProductInvoice
 * @property string $periodType
 * @property boolean $autoInvoiceFlag
 * @property string $nextInvoiceDate
 * @property array $customFields
 */
class Agreement extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'customerPO' => 'string',
        'restrictLocationFlag' => 'boolean',
        'restrictDepartmentFlag' => 'boolean',
        'startDate' => 'carbon',
        'endDate' => 'carbon',
        'noEndingDateFlag' => 'boolean',
        'cancelledFlag' => 'boolean',
        'dateCancelled' => 'carbon',
        'reasonCancelled' => 'string',
        'workOrder' => 'string',
        'internalNotes' => 'string',
        'applicationUnits' => 'string',
        'applicationLimit' => 'double',
        'applicationCycle' => 'string',
        'applicationUnlimitedFlag' => 'boolean',
        'oneTimeFlag' => 'boolean',
        'coverAgreementTime' => 'boolean',
        'coverAgreementProduct' => 'boolean',
        'coverAgreementExpense' => 'boolean',
        'coverSalesTax' => 'boolean',
        'carryOverUnused' => 'boolean',
        'allowOverruns' => 'boolean',
        'expiredDays' => 'integer',
        'limit' => 'integer',
        'expireWhenZero' => 'boolean',
        'chargeToFirm' => 'boolean',
        'employeeCompRate' => 'string',
        'employeeCompNotExceed' => 'string',
        'compHourlyRate' => 'double',
        'compLimitAmount' => 'double',
        'billOneTimeFlag' => 'boolean',
        'invoicingCycle' => 'string',
        'billAmount' => 'double',
        'taxable' => 'boolean',
        'prorateFirstBill' => 'double',
        'billStartDate' => 'carbon',
        'restrictDownPayment' => 'boolean',
        'prorateFlag' => 'boolean',
        'invoiceDescription' => 'string',
        'topComment' => 'boolean',
        'bottomComment' => 'boolean',
        'billTime' => 'string',
        'billExpenses' => 'string',
        'billProducts' => 'string',
        'billableTimeInvoice' => 'boolean',
        'billableExpenseInvoice' => 'boolean',
        'billableProductInvoice' => 'boolean',
        'periodType' => 'string',
        'autoInvoiceFlag' => 'boolean',
        'nextInvoiceDate' => 'string',
        'customFields' => 'array',
    ];
}
