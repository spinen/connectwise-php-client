<?php

namespace Spinen\ConnectWise\Models\v2018_6\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementType Version v2018_6
 * 
 * Model for AgreementType
 *
 * @property integer $id
 * @property string $name
 * @property string $prefixSuffixOption
 * @property boolean $defaultFlag
 * @property boolean $inactiveFlag
 * @property boolean $prePaymentFlag
 * @property string $invoicePreSuffix
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\SystemDepartmentReference $department
 * @property boolean $restrictLocationFlag
 * @property boolean $restrictDepartmentFlag
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\SLAReference $sla
 * @property string $applicationUnits
 * @property float $applicationLimit
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
 * @property float $compHourlyRate
 * @property float $compLimitAmount
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\BillingCycleReference $billingCycle
 * @property boolean $billOneTimeFlag
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\BillingTermsReference $billingTerms
 * @property string $invoicingCycle
 * @property float $billAmount
 * @property boolean $taxableFlag
 * @property boolean $restrictDownPaymentFlag
 * @property string $invoiceDescription
 * @property boolean $topCommentFlag
 * @property boolean $bottomCommentFlag
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\WorkRoleReference $workRole
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\WorkTypeReference $workType
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\ProjectTypeReference $projectType
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\InvoiceTemplateReference $invoiceTemplate
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
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\EmailTemplateReference $emailTemplate
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\Metadata $_info
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
        'location' => 'Spinen\ConnectWise\Models\v2018_6\Finance\SystemLocationReference',
        'department' => 'Spinen\ConnectWise\Models\v2018_6\Finance\SystemDepartmentReference',
        'restrictLocationFlag' => 'boolean',
        'restrictDepartmentFlag' => 'boolean',
        'sla' => 'Spinen\ConnectWise\Models\v2018_6\Finance\SLAReference',
        'applicationUnits' => 'string',
        'applicationLimit' => 'float',
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
        'compHourlyRate' => 'float',
        'compLimitAmount' => 'float',
        'billingCycle' => 'Spinen\ConnectWise\Models\v2018_6\Finance\BillingCycleReference',
        'billOneTimeFlag' => 'boolean',
        'billingTerms' => 'Spinen\ConnectWise\Models\v2018_6\Finance\BillingTermsReference',
        'invoicingCycle' => 'string',
        'billAmount' => 'float',
        'taxableFlag' => 'boolean',
        'restrictDownPaymentFlag' => 'boolean',
        'invoiceDescription' => 'string',
        'topCommentFlag' => 'boolean',
        'bottomCommentFlag' => 'boolean',
        'workRole' => 'Spinen\ConnectWise\Models\v2018_6\Finance\WorkRoleReference',
        'workType' => 'Spinen\ConnectWise\Models\v2018_6\Finance\WorkTypeReference',
        'projectType' => 'Spinen\ConnectWise\Models\v2018_6\Finance\ProjectTypeReference',
        'invoiceTemplate' => 'Spinen\ConnectWise\Models\v2018_6\Finance\InvoiceTemplateReference',
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
        'emailTemplate' => 'Spinen\ConnectWise\Models\v2018_6\Finance\EmailTemplateReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Finance\Metadata',
    ];
}
