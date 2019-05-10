<?php

namespace Spinen\ConnectWise\Models\v2018_6\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class UnpostedExpense Version v2018_6
 *
 * Model for UnpostedExpense
 *
 * @property AgreementReference $agreement
 * @property Carbon\Carbon $dateClosed
 * @property Carbon\Carbon $dateExpense
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
 * @property boolean $avalaraTaxFlag
 * @property boolean $cityTaxFlag
 * @property boolean $compositeTaxFlag
 * @property boolean $countryTaxFlag
 * @property boolean $countyTaxFlag
 * @property boolean $inPolicy
 * @property boolean $itemTaxableFlag
 * @property boolean $levelSixTaxFlag
 * @property boolean $stateTaxFlag
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
 * @property integer $departmentId
 * @property integer $expenseDetailId
 * @property integer $id
 * @property integer $locationId
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
        'dateClosed' => Carbon\Carbon::class,
        'dateExpense' => Carbon\Carbon::class,
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
