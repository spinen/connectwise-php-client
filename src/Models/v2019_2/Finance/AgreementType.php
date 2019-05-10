<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementType Version v2019_2
 *
 * Model for AgreementType
 *
 * @property BillingCycleReference $billingCycle
 * @property BillingTermsReference $billingTerms
 * @property EmailTemplateReference $emailTemplate
 * @property InvoiceTemplateReference $invoiceTemplate
 * @property Metadata $_info
 * @property ProjectTypeReference $projectType
 * @property SLAReference $sla
 * @property SystemDepartmentReference $department
 * @property SystemLocationReference $location
 * @property WorkRoleReference $workRole
 * @property WorkTypeReference $workType
 * @property array $exclusionWorkRoleIds
 * @property array $exclusionWorkTypeIds
 * @property boolean $addAllWorkRoleExclusions
 * @property boolean $addAllWorkTypeExclusions
 * @property boolean $allowOverrunsFlag
 * @property boolean $applicationUnlimitedFlag
 * @property boolean $autoInvoiceFlag
 * @property boolean $billOneTimeFlag
 * @property boolean $billableExpenseInvoiceFlag
 * @property boolean $billableProductInvoiceFlag
 * @property boolean $billableTimeInvoiceFlag
 * @property boolean $bottomCommentFlag
 * @property boolean $carryOverUnusedFlag
 * @property boolean $chargeToFirmFlag
 * @property boolean $copyWorkRolesFlag
 * @property boolean $copyWorkTypesFlag
 * @property boolean $coverAgreementExpenseFlag
 * @property boolean $coverAgreementProductFlag
 * @property boolean $coverAgreementTimeFlag
 * @property boolean $coverSalesTaxFlag
 * @property boolean $defaultFlag
 * @property boolean $expireWhenZero
 * @property boolean $inactiveFlag
 * @property boolean $oneTimeFlag
 * @property boolean $prePaymentFlag
 * @property boolean $prorateFlag
 * @property boolean $removeAllWorkRoleExclusions
 * @property boolean $removeAllWorkTypeExclusions
 * @property boolean $restrictDepartmentFlag
 * @property boolean $restrictDownPaymentFlag
 * @property boolean $restrictLocationFlag
 * @property boolean $taxableFlag
 * @property boolean $topCommentFlag
 * @property float $applicationLimit
 * @property float $billAmount
 * @property float $compHourlyRate
 * @property float $compLimitAmount
 * @property integer $expiredDays
 * @property integer $id
 * @property integer $limit
 * @property string $applicationCycle
 * @property string $applicationUnits
 * @property string $billExpenses
 * @property string $billProducts
 * @property string $billTime
 * @property string $employeeCompNotExceed
 * @property string $employeeCompRate
 * @property string $integrationXRef
 * @property string $invoiceDescription
 * @property string $invoicePreSuffix
 * @property string $invoicingCycle
 * @property string $name
 * @property string $prefixSuffixOption
 */
class AgreementType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'addAllWorkRoleExclusions' => 'boolean',
        'addAllWorkTypeExclusions' => 'boolean',
        'allowOverrunsFlag' => 'boolean',
        'applicationCycle' => 'string',
        'applicationLimit' => 'float',
        'applicationUnits' => 'string',
        'applicationUnlimitedFlag' => 'boolean',
        'autoInvoiceFlag' => 'boolean',
        'billAmount' => 'float',
        'billExpenses' => 'string',
        'billOneTimeFlag' => 'boolean',
        'billProducts' => 'string',
        'billTime' => 'string',
        'billableExpenseInvoiceFlag' => 'boolean',
        'billableProductInvoiceFlag' => 'boolean',
        'billableTimeInvoiceFlag' => 'boolean',
        'billingCycle' => BillingCycleReference::class,
        'billingTerms' => BillingTermsReference::class,
        'bottomCommentFlag' => 'boolean',
        'carryOverUnusedFlag' => 'boolean',
        'chargeToFirmFlag' => 'boolean',
        'compHourlyRate' => 'float',
        'compLimitAmount' => 'float',
        'copyWorkRolesFlag' => 'boolean',
        'copyWorkTypesFlag' => 'boolean',
        'coverAgreementExpenseFlag' => 'boolean',
        'coverAgreementProductFlag' => 'boolean',
        'coverAgreementTimeFlag' => 'boolean',
        'coverSalesTaxFlag' => 'boolean',
        'defaultFlag' => 'boolean',
        'department' => SystemDepartmentReference::class,
        'emailTemplate' => EmailTemplateReference::class,
        'employeeCompNotExceed' => 'string',
        'employeeCompRate' => 'string',
        'exclusionWorkRoleIds' => 'array',
        'exclusionWorkTypeIds' => 'array',
        'expireWhenZero' => 'boolean',
        'expiredDays' => 'integer',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'integrationXRef' => 'string',
        'invoiceDescription' => 'string',
        'invoicePreSuffix' => 'string',
        'invoiceTemplate' => InvoiceTemplateReference::class,
        'invoicingCycle' => 'string',
        'limit' => 'integer',
        'location' => SystemLocationReference::class,
        'name' => 'string',
        'oneTimeFlag' => 'boolean',
        'prePaymentFlag' => 'boolean',
        'prefixSuffixOption' => 'string',
        'projectType' => ProjectTypeReference::class,
        'prorateFlag' => 'boolean',
        'removeAllWorkRoleExclusions' => 'boolean',
        'removeAllWorkTypeExclusions' => 'boolean',
        'restrictDepartmentFlag' => 'boolean',
        'restrictDownPaymentFlag' => 'boolean',
        'restrictLocationFlag' => 'boolean',
        'sla' => SLAReference::class,
        'taxableFlag' => 'boolean',
        'topCommentFlag' => 'boolean',
        'workRole' => WorkRoleReference::class,
        'workType' => WorkTypeReference::class
    ];
}
