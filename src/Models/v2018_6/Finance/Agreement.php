<?php

namespace Spinen\ConnectWise\Models\v2018_6\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Agreement
 *
 * @property integer $id
 * @property string $name
 * @property integer $parentAgreementId
 * @property string $customerPO
 * @property integer $locationId
 * @property integer $businessUnitId
 * @property boolean $restrictLocationFlag
 * @property boolean $restrictDepartmentFlag
 * @property carbon $startDate
 * @property carbon $endDate
 * @property boolean $noEndingDateFlag
 * @property boolean $cancelledFlag
 * @property carbon $dateCancelled
 * @property string $reasonCancelled
 * @property integer $slaId
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
 * @property integer $billCycleId
 * @property boolean $billOneTimeFlag
 * @property integer $billTermsId
 * @property string $invoicingCycle
 * @property double $billAmount
 * @property boolean $taxable
 * @property double $prorateFirstBill
 * @property carbon $billStartDate
 * @property integer $taxCodeId
 * @property boolean $restrictDownPayment
 * @property boolean $prorateFlag
 * @property string $invoiceDescription
 * @property boolean $topComment
 * @property boolean $bottomComment
 * @property integer $projectTypeId
 * @property integer $invoiceTemplateSetupId
 * @property string $billTime
 * @property string $billExpenses
 * @property string $billProducts
 * @property boolean $billableTimeInvoice
 * @property boolean $billableExpenseInvoice
 * @property boolean $billableProductInvoice
 * @property string $periodType
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
        'parentAgreementId' => 'integer',
        'customerPO' => 'string',
        'locationId' => 'integer',
        'businessUnitId' => 'integer',
        'restrictLocationFlag' => 'boolean',
        'restrictDepartmentFlag' => 'boolean',
        'startDate' => 'carbon',
        'endDate' => 'carbon',
        'noEndingDateFlag' => 'boolean',
        'cancelledFlag' => 'boolean',
        'dateCancelled' => 'carbon',
        'reasonCancelled' => 'string',
        'slaId' => 'integer',
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
        'billCycleId' => 'integer',
        'billOneTimeFlag' => 'boolean',
        'billTermsId' => 'integer',
        'invoicingCycle' => 'string',
        'billAmount' => 'double',
        'taxable' => 'boolean',
        'prorateFirstBill' => 'double',
        'billStartDate' => 'carbon',
        'taxCodeId' => 'integer',
        'restrictDownPayment' => 'boolean',
        'prorateFlag' => 'boolean',
        'invoiceDescription' => 'string',
        'topComment' => 'boolean',
        'bottomComment' => 'boolean',
        'projectTypeId' => 'integer',
        'invoiceTemplateSetupId' => 'integer',
        'billTime' => 'string',
        'billExpenses' => 'string',
        'billProducts' => 'string',
        'billableTimeInvoice' => 'boolean',
        'billableExpenseInvoice' => 'boolean',
        'billableProductInvoice' => 'boolean',
        'periodType' => 'string',
        'customFields' => 'array',
    ];
}
