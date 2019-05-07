<?php

namespace Spinen\ConnectWise\Models\v2019_3\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementType
 *
 * @property integer $id
 * @property string $name
 * @property string $prefixSuffixOption
 * @property boolean $defaultFlag
 * @property boolean $inactiveFlag
 * @property boolean $prePaymentFlag
 * @property string $invoicePreSuffix
 * @property boolean $restrictLocationFlag
 * @property boolean $restrictDepartmentFlag
 * @property string $applicationUnits
 * @property double $applicationLimit
 * @property string $applicationCycle
 * @property boolean $applicationUnlimitedFlag
 * @property boolean $oneTimeFlag
 * @property boolean $coverAgreementTimeFlag
 * @property boolean $coverAgreementProductFlag
 * @property boolean $coverAgreementExpenseFlag
 * @property boolean $coverSalesTaxFlag
 * @property boolean $carryOverUnusedFlag
 * @property boolean $allowOverrunsFlag
 * @property integer $expiredDays
 * @property integer $limit
 * @property boolean $expireWhenZero
 * @property boolean $chargeToFirmFlag
 * @property string $employeeCompRate
 * @property string $employeeCompNotExceed
 * @property double $compHourlyRate
 * @property double $compLimitAmount
 * @property boolean $billOneTimeFlag
 * @property string $invoicingCycle
 * @property double $billAmount
 * @property boolean $taxableFlag
 * @property boolean $restrictDownPaymentFlag
 * @property string $invoiceDescription
 * @property boolean $topCommentFlag
 * @property boolean $bottomCommentFlag
 * @property string $billTime
 * @property string $billExpenses
 * @property string $billProducts
 * @property boolean $billableTimeInvoiceFlag
 * @property boolean $billableExpenseInvoiceFlag
 * @property boolean $billableProductInvoiceFlag
 * @property boolean $copyWorkRolesFlag
 * @property boolean $copyWorkTypesFlag
 * @property array $exclusionWorkRoleIds
 * @property boolean $addAllWorkRoleExclusions
 * @property boolean $removeAllWorkRoleExclusions
 * @property array $exclusionWorkTypeIds
 * @property boolean $addAllWorkTypeExclusions
 * @property boolean $removeAllWorkTypeExclusions
 * @property string $integrationXRef
 * @property boolean $prorateFlag
 * @property boolean $autoInvoiceFlag
 */
class AgreementType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'prefixSuffixOption' => 'string',
        'defaultFlag' => 'boolean',
        'inactiveFlag' => 'boolean',
        'prePaymentFlag' => 'boolean',
        'invoicePreSuffix' => 'string',
        'restrictLocationFlag' => 'boolean',
        'restrictDepartmentFlag' => 'boolean',
        'applicationUnits' => 'string',
        'applicationLimit' => 'double',
        'applicationCycle' => 'string',
        'applicationUnlimitedFlag' => 'boolean',
        'oneTimeFlag' => 'boolean',
        'coverAgreementTimeFlag' => 'boolean',
        'coverAgreementProductFlag' => 'boolean',
        'coverAgreementExpenseFlag' => 'boolean',
        'coverSalesTaxFlag' => 'boolean',
        'carryOverUnusedFlag' => 'boolean',
        'allowOverrunsFlag' => 'boolean',
        'expiredDays' => 'integer',
        'limit' => 'integer',
        'expireWhenZero' => 'boolean',
        'chargeToFirmFlag' => 'boolean',
        'employeeCompRate' => 'string',
        'employeeCompNotExceed' => 'string',
        'compHourlyRate' => 'double',
        'compLimitAmount' => 'double',
        'billOneTimeFlag' => 'boolean',
        'invoicingCycle' => 'string',
        'billAmount' => 'double',
        'taxableFlag' => 'boolean',
        'restrictDownPaymentFlag' => 'boolean',
        'invoiceDescription' => 'string',
        'topCommentFlag' => 'boolean',
        'bottomCommentFlag' => 'boolean',
        'billTime' => 'string',
        'billExpenses' => 'string',
        'billProducts' => 'string',
        'billableTimeInvoiceFlag' => 'boolean',
        'billableExpenseInvoiceFlag' => 'boolean',
        'billableProductInvoiceFlag' => 'boolean',
        'copyWorkRolesFlag' => 'boolean',
        'copyWorkTypesFlag' => 'boolean',
        'exclusionWorkRoleIds' => 'array',
        'addAllWorkRoleExclusions' => 'boolean',
        'removeAllWorkRoleExclusions' => 'boolean',
        'exclusionWorkTypeIds' => 'array',
        'addAllWorkTypeExclusions' => 'boolean',
        'removeAllWorkTypeExclusions' => 'boolean',
        'integrationXRef' => 'string',
        'prorateFlag' => 'boolean',
        'autoInvoiceFlag' => 'boolean',
    ];
}
