<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class UnpostedExpense Version v2019_2
 *
 * Model for UnpostedExpense
 *
 * @property Carbon\Carbon $dateClosed
 * @property Carbon\Carbon $dateExpense
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\AgreementReference $agreement
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\ChargeCodeReference $chargeCode
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\ExpenseTypeReference $expenseType
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\PaymentMethodReference $paymentMethod
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\ProjectPhaseReference $projectPhase
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\ProjectReference $project
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\TaxCodeReference $taxCode
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\TicketReference $ticket
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Finance\Metadata',
        'accountNumber' => 'string',
        'agreement' => 'Spinen\ConnectWise\Models\v2019_2\Finance\AgreementReference',
        'agreementAmountCovered' => 'float',
        'avalaraTaxFlag' => 'boolean',
        'billableAmount' => 'float',
        'chargeCode' => 'Spinen\ConnectWise\Models\v2019_2\Finance\ChargeCodeReference',
        'chargeDescription' => 'string',
        'cityTaxAmount' => 'float',
        'cityTaxFlag' => 'boolean',
        'cityTaxXref' => 'string',
        'classification' => 'string',
        'company' => 'Spinen\ConnectWise\Models\v2019_2\Finance\CompanyReference',
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
        'currency' => 'Spinen\ConnectWise\Models\v2019_2\Finance\CurrencyReference',
        'dateClosed' => 'Carbon\Carbon',
        'dateExpense' => 'Carbon\Carbon',
        'departmentId' => 'integer',
        'expenseDetailId' => 'integer',
        'expenseType' => 'Spinen\ConnectWise\Models\v2019_2\Finance\ExpenseTypeReference',
        'glType' => 'string',
        'id' => 'integer',
        'inPolicy' => 'boolean',
        'itemTaxableFlag' => 'boolean',
        'levelSixTaxAmount' => 'float',
        'levelSixTaxFlag' => 'boolean',
        'levelSixTaxXref' => 'string',
        'locationId' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2019_2\Finance\MemberReference',
        'nonBillableAmount' => 'float',
        'paymentMethod' => 'Spinen\ConnectWise\Models\v2019_2\Finance\PaymentMethodReference',
        'project' => 'Spinen\ConnectWise\Models\v2019_2\Finance\ProjectReference',
        'projectPhase' => 'Spinen\ConnectWise\Models\v2019_2\Finance\ProjectPhaseReference',
        'salesTaxAmount' => 'float',
        'stateTaxAmount' => 'float',
        'stateTaxFlag' => 'boolean',
        'stateTaxXref' => 'string',
        'taxCode' => 'Spinen\ConnectWise\Models\v2019_2\Finance\TaxCodeReference',
        'ticket' => 'Spinen\ConnectWise\Models\v2019_2\Finance\TicketReference',
        'total' => 'float',
    ];
}
