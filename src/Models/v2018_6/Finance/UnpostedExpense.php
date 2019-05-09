<?php

namespace Spinen\ConnectWise\Models\v2018_6\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class UnpostedExpense Version v2018_6
 * 
 * Model for UnpostedExpense
 *
 * @property integer $id
 * @property integer $locationId
 * @property integer $departmentId
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\CompanyReference $company
 * @property string $accountNumber
 * @property string $creditAccount
 * @property integer $expenseDetailId
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\ExpenseTypeReference $expenseType
 * @property string $classification
 * @property string $glType
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\MemberReference $member
 * @property string $dateExpense
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\ChargeCodeReference $chargeCode
 * @property string $chargeDescription
 * @property boolean $inPolicy
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\PaymentMethodReference $paymentMethod
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\CurrencyReference $currency
 * @property number $total
 * @property number $billableAmount
 * @property number $nonBillableAmount
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\AgreementReference $agreement
 * @property number $agreementAmountCovered
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\TicketReference $ticket
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\ProjectReference $project
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\ProjectPhaseReference $projectPhase
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\TaxCodeReference $taxCode
 * @property boolean $avalaraTaxFlag
 * @property boolean $itemTaxableFlag
 * @property number $salesTaxAmount
 * @property boolean $stateTaxFlag
 * @property string $stateTaxXref
 * @property number $stateTaxAmount
 * @property boolean $countyTaxFlag
 * @property string $countyTaxXref
 * @property number $countyTaxAmount
 * @property boolean $cityTaxFlag
 * @property string $cityTaxXref
 * @property number $cityTaxAmount
 * @property boolean $countryTaxFlag
 * @property string $countryTaxXref
 * @property number $countryTaxAmount
 * @property boolean $compositeTaxFlag
 * @property string $compositeTaxXref
 * @property number $compositeTaxAmount
 * @property boolean $levelSixTaxFlag
 * @property string $levelSixTaxXref
 * @property number $levelSixTaxAmount
 * @property string $dateClosed
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\Metadata $_info
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
        'company' => 'Spinen\ConnectWise\Models\v2018_6\Finance\CompanyReference',
        'accountNumber' => 'string',
        'creditAccount' => 'string',
        'expenseDetailId' => 'integer',
        'expenseType' => 'Spinen\ConnectWise\Models\v2018_6\Finance\ExpenseTypeReference',
        'classification' => 'string',
        'glType' => 'string',
        'member' => 'Spinen\ConnectWise\Models\v2018_6\Finance\MemberReference',
        'dateExpense' => 'string',
        'chargeCode' => 'Spinen\ConnectWise\Models\v2018_6\Finance\ChargeCodeReference',
        'chargeDescription' => 'string',
        'inPolicy' => 'boolean',
        'paymentMethod' => 'Spinen\ConnectWise\Models\v2018_6\Finance\PaymentMethodReference',
        'currency' => 'Spinen\ConnectWise\Models\v2018_6\Finance\CurrencyReference',
        'total' => 'number',
        'billableAmount' => 'number',
        'nonBillableAmount' => 'number',
        'agreement' => 'Spinen\ConnectWise\Models\v2018_6\Finance\AgreementReference',
        'agreementAmountCovered' => 'number',
        'ticket' => 'Spinen\ConnectWise\Models\v2018_6\Finance\TicketReference',
        'project' => 'Spinen\ConnectWise\Models\v2018_6\Finance\ProjectReference',
        'projectPhase' => 'Spinen\ConnectWise\Models\v2018_6\Finance\ProjectPhaseReference',
        'taxCode' => 'Spinen\ConnectWise\Models\v2018_6\Finance\TaxCodeReference',
        'avalaraTaxFlag' => 'boolean',
        'itemTaxableFlag' => 'boolean',
        'salesTaxAmount' => 'number',
        'stateTaxFlag' => 'boolean',
        'stateTaxXref' => 'string',
        'stateTaxAmount' => 'number',
        'countyTaxFlag' => 'boolean',
        'countyTaxXref' => 'string',
        'countyTaxAmount' => 'number',
        'cityTaxFlag' => 'boolean',
        'cityTaxXref' => 'string',
        'cityTaxAmount' => 'number',
        'countryTaxFlag' => 'boolean',
        'countryTaxXref' => 'string',
        'countryTaxAmount' => 'number',
        'compositeTaxFlag' => 'boolean',
        'compositeTaxXref' => 'string',
        'compositeTaxAmount' => 'number',
        'levelSixTaxFlag' => 'boolean',
        'levelSixTaxXref' => 'string',
        'levelSixTaxAmount' => 'number',
        'dateClosed' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Finance\Metadata',
    ];
}
