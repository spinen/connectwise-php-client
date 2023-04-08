<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class Agreement Version v2018_4
 *
 * Model for Agreement
 *
 * @property AgreementTypeReference $type
 * @property Carbon $billStartDate
 * @property Carbon $dateCancelled
 * @property Carbon $endDate
 * @property Carbon $startDate
 * @property CompanyReference $billToCompany
 * @property CompanyReference $company
 * @property CompanyReference $subContractCompany
 * @property ContactReference $contact
 * @property ContactReference $subContractContact
 * @property CurrencyReference $currency
 * @property Metadata $_info
 * @property OpportunityReference $opportunity
 * @property SiteReference $billToSite
 * @property WorkRoleReference $workRole
 * @property WorkTypeReference $workType
 * @property array $customFields
 * @property bool $allowOverruns
 * @property bool $applicationUnlimitedFlag
 * @property bool $billOneTimeFlag
 * @property bool $billableExpenseInvoice
 * @property bool $billableProductInvoice
 * @property bool $billableTimeInvoice
 * @property bool $bottomComment
 * @property bool $cancelledFlag
 * @property bool $carryOverUnused
 * @property bool $chargeToFirm
 * @property bool $coverAgreementExpense
 * @property bool $coverAgreementProduct
 * @property bool $coverAgreementTime
 * @property bool $coverSalesTax
 * @property bool $expireWhenZero
 * @property bool $noEndingDateFlag
 * @property bool $oneTimeFlag
 * @property bool $prorateFlag
 * @property bool $restrictDepartmentFlag
 * @property bool $restrictDownPayment
 * @property bool $restrictLocationFlag
 * @property bool $taxable
 * @property bool $topComment
 * @property float $applicationLimit
 * @property float $billAmount
 * @property float $compHourlyRate
 * @property float $compLimitAmount
 * @property float $prorateFirstBill
 * @property int $billCycleId
 * @property int $billTermsId
 * @property int $businessUnitId
 * @property int $expiredDays
 * @property int $id
 * @property int $invoiceTemplateSetupId
 * @property int $limit
 * @property int $locationId
 * @property int $parentAgreementId
 * @property int $projectTypeId
 * @property int $slaId
 * @property int $taxCodeId
 * @property string $applicationCycle
 * @property string $applicationUnits
 * @property string $billExpenses
 * @property string $billProducts
 * @property string $billTime
 * @property string $customerPO
 * @property string $employeeCompNotExceed
 * @property string $employeeCompRate
 * @property string $internalNotes
 * @property string $invoiceDescription
 * @property string $invoicingCycle
 * @property string $name
 * @property string $periodType
 * @property string $reasonCancelled
 * @property string $workOrder
 */
class Agreement extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'allowOverruns' => 'boolean',
        'applicationCycle' => 'string',
        'applicationLimit' => 'float',
        'applicationUnits' => 'string',
        'applicationUnlimitedFlag' => 'boolean',
        'billAmount' => 'float',
        'billCycleId' => 'integer',
        'billExpenses' => 'string',
        'billOneTimeFlag' => 'boolean',
        'billProducts' => 'string',
        'billStartDate' => Carbon::class,
        'billTermsId' => 'integer',
        'billTime' => 'string',
        'billToCompany' => CompanyReference::class,
        'billToSite' => SiteReference::class,
        'billableExpenseInvoice' => 'boolean',
        'billableProductInvoice' => 'boolean',
        'billableTimeInvoice' => 'boolean',
        'bottomComment' => 'boolean',
        'businessUnitId' => 'integer',
        'cancelledFlag' => 'boolean',
        'carryOverUnused' => 'boolean',
        'chargeToFirm' => 'boolean',
        'compHourlyRate' => 'float',
        'compLimitAmount' => 'float',
        'company' => CompanyReference::class,
        'contact' => ContactReference::class,
        'coverAgreementExpense' => 'boolean',
        'coverAgreementProduct' => 'boolean',
        'coverAgreementTime' => 'boolean',
        'coverSalesTax' => 'boolean',
        'currency' => CurrencyReference::class,
        'customFields' => 'array',
        'customerPO' => 'string',
        'dateCancelled' => Carbon::class,
        'employeeCompNotExceed' => 'string',
        'employeeCompRate' => 'string',
        'endDate' => Carbon::class,
        'expireWhenZero' => 'boolean',
        'expiredDays' => 'integer',
        'id' => 'integer',
        'internalNotes' => 'string',
        'invoiceDescription' => 'string',
        'invoiceTemplateSetupId' => 'integer',
        'invoicingCycle' => 'string',
        'limit' => 'integer',
        'locationId' => 'integer',
        'name' => 'string',
        'noEndingDateFlag' => 'boolean',
        'oneTimeFlag' => 'boolean',
        'opportunity' => OpportunityReference::class,
        'parentAgreementId' => 'integer',
        'periodType' => 'string',
        'projectTypeId' => 'integer',
        'prorateFirstBill' => 'float',
        'prorateFlag' => 'boolean',
        'reasonCancelled' => 'string',
        'restrictDepartmentFlag' => 'boolean',
        'restrictDownPayment' => 'boolean',
        'restrictLocationFlag' => 'boolean',
        'slaId' => 'integer',
        'startDate' => Carbon::class,
        'subContractCompany' => CompanyReference::class,
        'subContractContact' => ContactReference::class,
        'taxCodeId' => 'integer',
        'taxable' => 'boolean',
        'topComment' => 'boolean',
        'type' => AgreementTypeReference::class,
        'workOrder' => 'string',
        'workRole' => WorkRoleReference::class,
        'workType' => WorkTypeReference::class,
    ];
}
