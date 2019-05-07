<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TaxCode
 *
 * @property integer $id
 * @property string $identifier
 * @property string $description
 * @property string $invoiceCaption
 * @property carbon $effectiveDate
 * @property boolean $defaultFlag
 * @property boolean $displayOnInvoiceFlag
 * @property boolean $canadaCalculateGSTFlag
 * @property carbon $cancelDate
 * @property double $levelOneRate
 * @property string $levelOneRateType
 * @property double $levelOneTaxableMax
 * @property string $levelOneCaption
 * @property string $levelOneTaxCodeXref
 * @property string $levelOneAgencyXref
 * @property boolean $levelOneServicesFlag
 * @property boolean $levelOneExpensesFlag
 * @property boolean $levelOneProductsFlag
 * @property boolean $levelOneApplySingleUnitFlag
 * @property double $levelOneApplySingleUnitMin
 * @property double $levelOneApplySingleUnitMax
 * @property double $levelTwoRate
 * @property string $levelTwoRateType
 * @property double $levelTwoTaxableMax
 * @property string $levelTwoCaption
 * @property string $levelTwoTaxCodeXref
 * @property string $levelTwoAgencyXref
 * @property boolean $levelTwoServicesFlag
 * @property boolean $levelTwoExpensesFlag
 * @property boolean $levelTwoProductsFlag
 * @property boolean $levelTwoApplySingleUnitFlag
 * @property double $levelTwoApplySingleUnitMin
 * @property double $levelTwoApplySingleUnitMax
 * @property double $levelThreeRate
 * @property string $levelThreeRateType
 * @property double $levelThreeTaxableMax
 * @property string $levelThreeCaption
 * @property string $levelThreeTaxCodeXref
 * @property string $levelThreeAgencyXref
 * @property boolean $levelThreeServicesFlag
 * @property boolean $levelThreeExpensesFlag
 * @property boolean $levelThreeProductsFlag
 * @property boolean $levelThreeApplySingleUnitFlag
 * @property double $levelThreeApplySingleUnitMin
 * @property double $levelThreeApplySingleUnitMax
 * @property double $levelFourRate
 * @property string $levelFourRateType
 * @property double $levelFourTaxableMax
 * @property string $levelFourCaption
 * @property string $levelFourTaxCodeXref
 * @property string $levelFourAgencyXref
 * @property boolean $levelFourServicesFlag
 * @property boolean $levelFourExpensesFlag
 * @property boolean $levelFourProductsFlag
 * @property boolean $levelFourApplySingleUnitFlag
 * @property double $levelFourApplySingleUnitMin
 * @property double $levelFourApplySingleUnitMax
 * @property double $levelFiveRate
 * @property string $levelFiveRateType
 * @property double $levelFiveTaxableMax
 * @property string $levelFiveCaption
 * @property string $levelFiveTaxCodeXref
 * @property string $levelFiveAgencyXref
 * @property boolean $levelFiveServicesFlag
 * @property boolean $levelFiveExpensesFlag
 * @property boolean $levelFiveProductsFlag
 * @property boolean $levelFiveApplySingleUnitFlag
 * @property double $levelFiveApplySingleUnitMin
 * @property double $levelFiveApplySingleUnitMax
 * @property double $levelSixRate
 * @property string $levelSixRateType
 * @property double $levelSixTaxableMax
 * @property string $levelSixCaption
 * @property string $levelSixTaxCodeXref
 * @property string $levelSixAgencyXref
 * @property boolean $levelSixServicesFlag
 * @property boolean $levelSixExpensesFlag
 * @property boolean $levelSixProductsFlag
 * @property boolean $levelSixApplySingleUnitFlag
 * @property double $levelSixApplySingleUnitMin
 * @property double $levelSixApplySingleUnitMax
 * @property array $workRoleIds
 * @property boolean $addAllWorkRoles
 * @property boolean $removeAllWorkRoles
 * @property array $expenseTypeIds
 * @property boolean $addAllExpenseTypes
 * @property boolean $removeAllExpenseTypes
 * @property array $productTypeIds
 * @property boolean $addAllProductTypes
 * @property boolean $removeAllProductTypes
 */
class TaxCode extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'identifier' => 'string',
        'description' => 'string',
        'invoiceCaption' => 'string',
        'effectiveDate' => 'carbon',
        'defaultFlag' => 'boolean',
        'displayOnInvoiceFlag' => 'boolean',
        'canadaCalculateGSTFlag' => 'boolean',
        'cancelDate' => 'carbon',
        'levelOneRate' => 'double',
        'levelOneRateType' => 'string',
        'levelOneTaxableMax' => 'double',
        'levelOneCaption' => 'string',
        'levelOneTaxCodeXref' => 'string',
        'levelOneAgencyXref' => 'string',
        'levelOneServicesFlag' => 'boolean',
        'levelOneExpensesFlag' => 'boolean',
        'levelOneProductsFlag' => 'boolean',
        'levelOneApplySingleUnitFlag' => 'boolean',
        'levelOneApplySingleUnitMin' => 'double',
        'levelOneApplySingleUnitMax' => 'double',
        'levelTwoRate' => 'double',
        'levelTwoRateType' => 'string',
        'levelTwoTaxableMax' => 'double',
        'levelTwoCaption' => 'string',
        'levelTwoTaxCodeXref' => 'string',
        'levelTwoAgencyXref' => 'string',
        'levelTwoServicesFlag' => 'boolean',
        'levelTwoExpensesFlag' => 'boolean',
        'levelTwoProductsFlag' => 'boolean',
        'levelTwoApplySingleUnitFlag' => 'boolean',
        'levelTwoApplySingleUnitMin' => 'double',
        'levelTwoApplySingleUnitMax' => 'double',
        'levelThreeRate' => 'double',
        'levelThreeRateType' => 'string',
        'levelThreeTaxableMax' => 'double',
        'levelThreeCaption' => 'string',
        'levelThreeTaxCodeXref' => 'string',
        'levelThreeAgencyXref' => 'string',
        'levelThreeServicesFlag' => 'boolean',
        'levelThreeExpensesFlag' => 'boolean',
        'levelThreeProductsFlag' => 'boolean',
        'levelThreeApplySingleUnitFlag' => 'boolean',
        'levelThreeApplySingleUnitMin' => 'double',
        'levelThreeApplySingleUnitMax' => 'double',
        'levelFourRate' => 'double',
        'levelFourRateType' => 'string',
        'levelFourTaxableMax' => 'double',
        'levelFourCaption' => 'string',
        'levelFourTaxCodeXref' => 'string',
        'levelFourAgencyXref' => 'string',
        'levelFourServicesFlag' => 'boolean',
        'levelFourExpensesFlag' => 'boolean',
        'levelFourProductsFlag' => 'boolean',
        'levelFourApplySingleUnitFlag' => 'boolean',
        'levelFourApplySingleUnitMin' => 'double',
        'levelFourApplySingleUnitMax' => 'double',
        'levelFiveRate' => 'double',
        'levelFiveRateType' => 'string',
        'levelFiveTaxableMax' => 'double',
        'levelFiveCaption' => 'string',
        'levelFiveTaxCodeXref' => 'string',
        'levelFiveAgencyXref' => 'string',
        'levelFiveServicesFlag' => 'boolean',
        'levelFiveExpensesFlag' => 'boolean',
        'levelFiveProductsFlag' => 'boolean',
        'levelFiveApplySingleUnitFlag' => 'boolean',
        'levelFiveApplySingleUnitMin' => 'double',
        'levelFiveApplySingleUnitMax' => 'double',
        'levelSixRate' => 'double',
        'levelSixRateType' => 'string',
        'levelSixTaxableMax' => 'double',
        'levelSixCaption' => 'string',
        'levelSixTaxCodeXref' => 'string',
        'levelSixAgencyXref' => 'string',
        'levelSixServicesFlag' => 'boolean',
        'levelSixExpensesFlag' => 'boolean',
        'levelSixProductsFlag' => 'boolean',
        'levelSixApplySingleUnitFlag' => 'boolean',
        'levelSixApplySingleUnitMin' => 'double',
        'levelSixApplySingleUnitMax' => 'double',
        'workRoleIds' => 'array',
        'addAllWorkRoles' => 'boolean',
        'removeAllWorkRoles' => 'boolean',
        'expenseTypeIds' => 'array',
        'addAllExpenseTypes' => 'boolean',
        'removeAllExpenseTypes' => 'boolean',
        'productTypeIds' => 'array',
        'addAllProductTypes' => 'boolean',
        'removeAllProductTypes' => 'boolean',
    ];
}
