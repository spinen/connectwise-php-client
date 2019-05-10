<?php

namespace Spinen\ConnectWise\Models\v2018_5\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Agreement Version v2018_5
 * 
 * Model for Agreement
 *
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\AgreementTypeReference $type
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\ContactReference $contact
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\CompanyReference $subContractCompany
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\ContactReference $subContractContact
 * @property integer $parentAgreementId
 * @property string $customerPO
 * @property integer $locationId
 * @property integer $businessUnitId
 * @property boolean $restrictLocationFlag
 * @property boolean $restrictDepartmentFlag
 * @property Carbon\Carbon $startDate
 * @property Carbon\Carbon $endDate
 * @property boolean $noEndingDateFlag
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\OpportunityReference $opportunity
 * @property boolean $cancelledFlag
 * @property Carbon\Carbon $dateCancelled
 * @property string $reasonCancelled
 * @property integer $slaId
 * @property string $workOrder
 * @property string $internalNotes
 * @property string $applicationUnits
 * @property float $applicationLimit
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
 * @property float $compHourlyRate
 * @property float $compLimitAmount
 * @property integer $billCycleId
 * @property boolean $billOneTimeFlag
 * @property integer $billTermsId
 * @property string $invoicingCycle
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\CompanyReference $billToCompany
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\SiteReference $billToSite
 * @property float $billAmount
 * @property boolean $taxable
 * @property float $prorateFirstBill
 * @property Carbon\Carbon $billStartDate
 * @property integer $taxCodeId
 * @property boolean $restrictDownPayment
 * @property boolean $prorateFlag
 * @property string $invoiceDescription
 * @property boolean $topComment
 * @property boolean $bottomComment
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\WorkRoleReference $workRole
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\WorkTypeReference $workType
 * @property integer $projectTypeId
 * @property integer $invoiceTemplateSetupId
 * @property string $billTime
 * @property string $billExpenses
 * @property string $billProducts
 * @property boolean $billableTimeInvoice
 * @property boolean $billableExpenseInvoice
 * @property boolean $billableProductInvoice
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\CurrencyReference $currency
 * @property string $periodType
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\Metadata $_info
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
        'type' => 'Spinen\ConnectWise\Models\v2018_5\Sales\AgreementTypeReference',
        'company' => 'Spinen\ConnectWise\Models\v2018_5\Sales\CompanyReference',
        'contact' => 'Spinen\ConnectWise\Models\v2018_5\Sales\ContactReference',
        'subContractCompany' => 'Spinen\ConnectWise\Models\v2018_5\Sales\CompanyReference',
        'subContractContact' => 'Spinen\ConnectWise\Models\v2018_5\Sales\ContactReference',
        'parentAgreementId' => 'integer',
        'customerPO' => 'string',
        'locationId' => 'integer',
        'businessUnitId' => 'integer',
        'restrictLocationFlag' => 'boolean',
        'restrictDepartmentFlag' => 'boolean',
        'startDate' => 'Carbon\Carbon',
        'endDate' => 'Carbon\Carbon',
        'noEndingDateFlag' => 'boolean',
        'opportunity' => 'Spinen\ConnectWise\Models\v2018_5\Sales\OpportunityReference',
        'cancelledFlag' => 'boolean',
        'dateCancelled' => 'Carbon\Carbon',
        'reasonCancelled' => 'string',
        'slaId' => 'integer',
        'workOrder' => 'string',
        'internalNotes' => 'string',
        'applicationUnits' => 'string',
        'applicationLimit' => 'float',
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
        'compHourlyRate' => 'float',
        'compLimitAmount' => 'float',
        'billCycleId' => 'integer',
        'billOneTimeFlag' => 'boolean',
        'billTermsId' => 'integer',
        'invoicingCycle' => 'string',
        'billToCompany' => 'Spinen\ConnectWise\Models\v2018_5\Sales\CompanyReference',
        'billToSite' => 'Spinen\ConnectWise\Models\v2018_5\Sales\SiteReference',
        'billAmount' => 'float',
        'taxable' => 'boolean',
        'prorateFirstBill' => 'float',
        'billStartDate' => 'Carbon\Carbon',
        'taxCodeId' => 'integer',
        'restrictDownPayment' => 'boolean',
        'prorateFlag' => 'boolean',
        'invoiceDescription' => 'string',
        'topComment' => 'boolean',
        'bottomComment' => 'boolean',
        'workRole' => 'Spinen\ConnectWise\Models\v2018_5\Sales\WorkRoleReference',
        'workType' => 'Spinen\ConnectWise\Models\v2018_5\Sales\WorkTypeReference',
        'projectTypeId' => 'integer',
        'invoiceTemplateSetupId' => 'integer',
        'billTime' => 'string',
        'billExpenses' => 'string',
        'billProducts' => 'string',
        'billableTimeInvoice' => 'boolean',
        'billableExpenseInvoice' => 'boolean',
        'billableProductInvoice' => 'boolean',
        'currency' => 'Spinen\ConnectWise\Models\v2018_5\Sales\CurrencyReference',
        'periodType' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Sales\Metadata',
        'customFields' => 'array',
    ];
}
