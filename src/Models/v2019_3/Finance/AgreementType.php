<?php

namespace Spinen\ConnectWise\Models\v2019_3\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementType Version v2019_3
 *
 * Model for AgreementType
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\BillingCycleReference $billingCycle
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\BillingTermsReference $billingTerms
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\EmailTemplateReference $emailTemplate
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\InvoiceTemplateReference $invoiceTemplate
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\ProjectTypeReference $projectType
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\SLAReference $sla
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\WorkRoleReference $workRole
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\WorkTypeReference $workType
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Finance\Metadata',
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
        'billingCycle' => 'Spinen\ConnectWise\Models\v2019_3\Finance\BillingCycleReference',
        'billingTerms' => 'Spinen\ConnectWise\Models\v2019_3\Finance\BillingTermsReference',
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
        'department' => 'Spinen\ConnectWise\Models\v2019_3\Finance\SystemDepartmentReference',
        'emailTemplate' => 'Spinen\ConnectWise\Models\v2019_3\Finance\EmailTemplateReference',
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
        'invoiceTemplate' => 'Spinen\ConnectWise\Models\v2019_3\Finance\InvoiceTemplateReference',
        'invoicingCycle' => 'string',
        'limit' => 'integer',
        'location' => 'Spinen\ConnectWise\Models\v2019_3\Finance\SystemLocationReference',
        'name' => 'string',
        'oneTimeFlag' => 'boolean',
        'prePaymentFlag' => 'boolean',
        'prefixSuffixOption' => 'string',
        'projectType' => 'Spinen\ConnectWise\Models\v2019_3\Finance\ProjectTypeReference',
        'prorateFlag' => 'boolean',
        'removeAllWorkRoleExclusions' => 'boolean',
        'removeAllWorkTypeExclusions' => 'boolean',
        'restrictDepartmentFlag' => 'boolean',
        'restrictDownPaymentFlag' => 'boolean',
        'restrictLocationFlag' => 'boolean',
        'sla' => 'Spinen\ConnectWise\Models\v2019_3\Finance\SLAReference',
        'taxableFlag' => 'boolean',
        'topCommentFlag' => 'boolean',
        'workRole' => 'Spinen\ConnectWise\Models\v2019_3\Finance\WorkRoleReference',
        'workType' => 'Spinen\ConnectWise\Models\v2019_3\Finance\WorkTypeReference',
    ];
}
