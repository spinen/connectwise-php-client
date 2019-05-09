<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementType Version v2019_1
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
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\SystemDepartmentReference $department
 * @property boolean $restrictLocationFlag
 * @property boolean $restrictDepartmentFlag
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\SLAReference $sla
 * @property string $applicationUnits
 * @property number $applicationLimit
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
 * @property number $compHourlyRate
 * @property number $compLimitAmount
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\BillingCycleReference $billingCycle
 * @property boolean $billOneTimeFlag
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\BillingTermsReference $billingTerms
 * @property string $invoicingCycle
 * @property number $billAmount
 * @property boolean $taxableFlag
 * @property boolean $restrictDownPaymentFlag
 * @property string $invoiceDescription
 * @property boolean $topCommentFlag
 * @property boolean $bottomCommentFlag
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\WorkRoleReference $workRole
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\WorkTypeReference $workType
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\ProjectTypeReference $projectType
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\InvoiceTemplateReference $invoiceTemplate
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
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\EmailTemplateReference $emailTemplate
 * @property boolean $autoInvoiceFlag
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\Metadata $_info
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
        'location' => 'Spinen\ConnectWise\Models\v2019_1\Finance\SystemLocationReference',
        'department' => 'Spinen\ConnectWise\Models\v2019_1\Finance\SystemDepartmentReference',
        'restrictLocationFlag' => 'boolean',
        'restrictDepartmentFlag' => 'boolean',
        'sla' => 'Spinen\ConnectWise\Models\v2019_1\Finance\SLAReference',
        'applicationUnits' => 'string',
        'applicationLimit' => 'number',
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
        'compHourlyRate' => 'number',
        'compLimitAmount' => 'number',
        'billingCycle' => 'Spinen\ConnectWise\Models\v2019_1\Finance\BillingCycleReference',
        'billOneTimeFlag' => 'boolean',
        'billingTerms' => 'Spinen\ConnectWise\Models\v2019_1\Finance\BillingTermsReference',
        'invoicingCycle' => 'string',
        'billAmount' => 'number',
        'taxableFlag' => 'boolean',
        'restrictDownPaymentFlag' => 'boolean',
        'invoiceDescription' => 'string',
        'topCommentFlag' => 'boolean',
        'bottomCommentFlag' => 'boolean',
        'workRole' => 'Spinen\ConnectWise\Models\v2019_1\Finance\WorkRoleReference',
        'workType' => 'Spinen\ConnectWise\Models\v2019_1\Finance\WorkTypeReference',
        'projectType' => 'Spinen\ConnectWise\Models\v2019_1\Finance\ProjectTypeReference',
        'invoiceTemplate' => 'Spinen\ConnectWise\Models\v2019_1\Finance\InvoiceTemplateReference',
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
        'emailTemplate' => 'Spinen\ConnectWise\Models\v2019_1\Finance\EmailTemplateReference',
        'autoInvoiceFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Finance\Metadata',
    ];
}
