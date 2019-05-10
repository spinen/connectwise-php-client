<?php

namespace Spinen\ConnectWise\Models\v2019_3\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class UnpostedExpense Version v2019_3
 *
 * Model for UnpostedExpense
 *
 * @property integer $id
 * @property integer $locationId
 * @property integer $departmentId
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\CompanyReference $company
 * @property string $accountNumber
 * @property string $creditAccount
 * @property integer $expenseDetailId
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\ExpenseTypeReference $expenseType
 * @property string $classification
 * @property string $glType
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\MemberReference $member
 * @property Carbon\Carbon $dateExpense
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\ChargeCodeReference $chargeCode
 * @property string $chargeDescription
 * @property boolean $inPolicy
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\PaymentMethodReference $paymentMethod
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\CurrencyReference $currency
 * @property float $total
 * @property float $billableAmount
 * @property float $nonBillableAmount
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\AgreementReference $agreement
 * @property float $agreementAmountCovered
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\TicketReference $ticket
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\ProjectReference $project
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\ProjectPhaseReference $projectPhase
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\TaxCodeReference $taxCode
 * @property boolean $avalaraTaxFlag
 * @property boolean $itemTaxableFlag
 * @property float $salesTaxAmount
 * @property boolean $stateTaxFlag
 * @property string $stateTaxXref
 * @property float $stateTaxAmount
 * @property boolean $countyTaxFlag
 * @property string $countyTaxXref
 * @property float $countyTaxAmount
 * @property boolean $cityTaxFlag
 * @property string $cityTaxXref
 * @property float $cityTaxAmount
 * @property boolean $countryTaxFlag
 * @property string $countryTaxXref
 * @property float $countryTaxAmount
 * @property boolean $compositeTaxFlag
 * @property string $compositeTaxXref
 * @property float $compositeTaxAmount
 * @property boolean $levelSixTaxFlag
 * @property string $levelSixTaxXref
 * @property float $levelSixTaxAmount
 * @property Carbon\Carbon $dateClosed
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\Metadata $_info
 */
class UnpostedExpense extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'locationId' => 'integer',
        'departmentId' => 'integer',
        'company' => 'Spinen\ConnectWise\Models\v2019_3\Finance\CompanyReference',
        'accountNumber' => 'string',
        'creditAccount' => 'string',
        'expenseDetailId' => 'integer',
        'expenseType' => 'Spinen\ConnectWise\Models\v2019_3\Finance\ExpenseTypeReference',
        'classification' => 'string',
        'glType' => 'string',
        'member' => 'Spinen\ConnectWise\Models\v2019_3\Finance\MemberReference',
        'dateExpense' => 'Carbon\Carbon',
        'chargeCode' => 'Spinen\ConnectWise\Models\v2019_3\Finance\ChargeCodeReference',
        'chargeDescription' => 'string',
        'inPolicy' => 'boolean',
        'paymentMethod' => 'Spinen\ConnectWise\Models\v2019_3\Finance\PaymentMethodReference',
        'currency' => 'Spinen\ConnectWise\Models\v2019_3\Finance\CurrencyReference',
        'total' => 'float',
        'billableAmount' => 'float',
        'nonBillableAmount' => 'float',
        'agreement' => 'Spinen\ConnectWise\Models\v2019_3\Finance\AgreementReference',
        'agreementAmountCovered' => 'float',
        'ticket' => 'Spinen\ConnectWise\Models\v2019_3\Finance\TicketReference',
        'project' => 'Spinen\ConnectWise\Models\v2019_3\Finance\ProjectReference',
        'projectPhase' => 'Spinen\ConnectWise\Models\v2019_3\Finance\ProjectPhaseReference',
        'taxCode' => 'Spinen\ConnectWise\Models\v2019_3\Finance\TaxCodeReference',
        'avalaraTaxFlag' => 'boolean',
        'itemTaxableFlag' => 'boolean',
        'salesTaxAmount' => 'float',
        'stateTaxFlag' => 'boolean',
        'stateTaxXref' => 'string',
        'stateTaxAmount' => 'float',
        'countyTaxFlag' => 'boolean',
        'countyTaxXref' => 'string',
        'countyTaxAmount' => 'float',
        'cityTaxFlag' => 'boolean',
        'cityTaxXref' => 'string',
        'cityTaxAmount' => 'float',
        'countryTaxFlag' => 'boolean',
        'countryTaxXref' => 'string',
        'countryTaxAmount' => 'float',
        'compositeTaxFlag' => 'boolean',
        'compositeTaxXref' => 'string',
        'compositeTaxAmount' => 'float',
        'levelSixTaxFlag' => 'boolean',
        'levelSixTaxXref' => 'string',
        'levelSixTaxAmount' => 'float',
        'dateClosed' => 'Carbon\Carbon',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Finance\Metadata',
    ];
}
