<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AccountingUnpostedExpense
 *
 * @property integer $id
 * @property integer $locationId
 * @property integer $departmentId
 * @property string $accountNumber
 * @property string $creditAccount
 * @property integer $expenseDetailId
 * @property string $classification
 * @property string $glType
 * @property carbon $dateExpense
 * @property string $chargeDescription
 * @property boolean $inPolicy
 * @property double $total
 * @property double $billableAmount
 * @property double $nonBillableAmount
 * @property double $agreementAmountCovered
 * @property boolean $avalaraTaxFlag
 * @property boolean $itemTaxableFlag
 * @property double $salesTaxAmount
 * @property boolean $stateTaxFlag
 * @property string $stateTaxXref
 * @property double $stateTaxAmount
 * @property boolean $countyTaxFlag
 * @property string $countyTaxXref
 * @property double $countyTaxAmount
 * @property boolean $cityTaxFlag
 * @property string $cityTaxXref
 * @property double $cityTaxAmount
 * @property boolean $countryTaxFlag
 * @property string $countryTaxXref
 * @property double $countryTaxAmount
 * @property boolean $compositeTaxFlag
 * @property string $compositeTaxXref
 * @property double $compositeTaxAmount
 * @property boolean $levelSixTaxFlag
 * @property string $levelSixTaxXref
 * @property double $levelSixTaxAmount
 * @property carbon $dateClosed
 */
class AccountingUnpostedExpense extends Model
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
        'accountNumber' => 'string',
        'creditAccount' => 'string',
        'expenseDetailId' => 'integer',
        'classification' => 'string',
        'glType' => 'string',
        'dateExpense' => 'carbon',
        'chargeDescription' => 'string',
        'inPolicy' => 'boolean',
        'total' => 'double',
        'billableAmount' => 'double',
        'nonBillableAmount' => 'double',
        'agreementAmountCovered' => 'double',
        'avalaraTaxFlag' => 'boolean',
        'itemTaxableFlag' => 'boolean',
        'salesTaxAmount' => 'double',
        'stateTaxFlag' => 'boolean',
        'stateTaxXref' => 'string',
        'stateTaxAmount' => 'double',
        'countyTaxFlag' => 'boolean',
        'countyTaxXref' => 'string',
        'countyTaxAmount' => 'double',
        'cityTaxFlag' => 'boolean',
        'cityTaxXref' => 'string',
        'cityTaxAmount' => 'double',
        'countryTaxFlag' => 'boolean',
        'countryTaxXref' => 'string',
        'countryTaxAmount' => 'double',
        'compositeTaxFlag' => 'boolean',
        'compositeTaxXref' => 'string',
        'compositeTaxAmount' => 'double',
        'levelSixTaxFlag' => 'boolean',
        'levelSixTaxXref' => 'string',
        'levelSixTaxAmount' => 'double',
        'dateClosed' => 'carbon',
    ];
}
