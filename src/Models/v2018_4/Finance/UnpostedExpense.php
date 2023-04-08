<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class UnpostedExpense Version v2018_4
 *
 * Model for UnpostedExpense
 *
 * @property AgreementReference $agreement
 * @property Carbon $dateClosed
 * @property Carbon $dateExpense
 * @property ChargeCodeReference $chargeCode
 * @property CompanyReference $company
 * @property CurrencyReference $currency
 * @property ExpenseTypeReference $expenseType
 * @property MemberReference $member
 * @property Metadata $_info
 * @property PaymentMethodReference $paymentMethod
 * @property ProjectPhaseReference $projectPhase
 * @property ProjectReference $project
 * @property TaxCodeReference $taxCode
 * @property TicketReference $ticket
 * @property bool $avalaraTaxFlag
 * @property bool $cityTaxFlag
 * @property bool $compositeTaxFlag
 * @property bool $countryTaxFlag
 * @property bool $countyTaxFlag
 * @property bool $inPolicy
 * @property bool $itemTaxableFlag
 * @property bool $levelSixTaxFlag
 * @property bool $stateTaxFlag
 * @property float $agreementAmountCovered
 * @property float $billableAmount
 * @property float $cityTaxAmount
 * @property float $compositeTaxAmount
 * @property float $countryTaxAmount
 * @property float $countyTaxAmount
 * @property float $levelSixTaxAmount
 * @property float $nonBillableAmount
 * @property float $salesTaxAmount
 * @property float $stateTaxAmount
 * @property float $total
 * @property int $departmentId
 * @property int $expenseDetailId
 * @property int $id
 * @property int $locationId
 * @property string $accountNumber
 * @property string $chargeDescription
 * @property string $cityTaxXref
 * @property string $classification
 * @property string $compositeTaxXref
 * @property string $countryTaxXref
 * @property string $countyTaxXref
 * @property string $creditAccount
 * @property string $glType
 * @property string $levelSixTaxXref
 * @property string $stateTaxXref
 */
class UnpostedExpense extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'accountNumber' => 'string',
        'agreement' => AgreementReference::class,
        'agreementAmountCovered' => 'float',
        'avalaraTaxFlag' => 'boolean',
        'billableAmount' => 'float',
        'chargeCode' => ChargeCodeReference::class,
        'chargeDescription' => 'string',
        'cityTaxAmount' => 'float',
        'cityTaxFlag' => 'boolean',
        'cityTaxXref' => 'string',
        'classification' => 'string',
        'company' => CompanyReference::class,
        'compositeTaxAmount' => 'float',
        'compositeTaxFlag' => 'boolean',
        'compositeTaxXref' => 'string',
        'countryTaxAmount' => 'float',
        'countryTaxFlag' => 'boolean',
        'countryTaxXref' => 'string',
        'countyTaxAmount' => 'float',
        'countyTaxFlag' => 'boolean',
        'countyTaxXref' => 'string',
        'creditAccount' => 'string',
        'currency' => CurrencyReference::class,
        'dateClosed' => Carbon::class,
        'dateExpense' => Carbon::class,
        'departmentId' => 'integer',
        'expenseDetailId' => 'integer',
        'expenseType' => ExpenseTypeReference::class,
        'glType' => 'string',
        'id' => 'integer',
        'inPolicy' => 'boolean',
        'itemTaxableFlag' => 'boolean',
        'levelSixTaxAmount' => 'float',
        'levelSixTaxFlag' => 'boolean',
        'levelSixTaxXref' => 'string',
        'locationId' => 'integer',
        'member' => MemberReference::class,
        'nonBillableAmount' => 'float',
        'paymentMethod' => PaymentMethodReference::class,
        'project' => ProjectReference::class,
        'projectPhase' => ProjectPhaseReference::class,
        'salesTaxAmount' => 'float',
        'stateTaxAmount' => 'float',
        'stateTaxFlag' => 'boolean',
        'stateTaxXref' => 'string',
        'taxCode' => TaxCodeReference::class,
        'ticket' => TicketReference::class,
        'total' => 'float',
    ];
}
