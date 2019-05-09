<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TaxCode Version v2018_4
 * 
 * Model for TaxCode
 *
 * @property integer $id
 * @property string $identifier
 * @property string $description
 * @property string $invoiceCaption
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\CountryReference $country
 * @property string $effectiveDate
 * @property boolean $defaultFlag
 * @property boolean $displayOnInvoiceFlag
 * @property boolean $canadaCalculateGSTFlag
 * @property string $cancelDate
 * @property number $levelOneRate
 * @property string $levelOneRateType
 * @property number $levelOneTaxableMax
 * @property string $levelOneCaption
 * @property string $levelOneTaxCodeXref
 * @property string $levelOneAgencyXref
 * @property boolean $levelOneServicesFlag
 * @property boolean $levelOneExpensesFlag
 * @property boolean $levelOneProductsFlag
 * @property boolean $levelOneApplySingleUnitFlag
 * @property number $levelOneApplySingleUnitMin
 * @property number $levelOneApplySingleUnitMax
 * @property number $levelTwoRate
 * @property string $levelTwoRateType
 * @property number $levelTwoTaxableMax
 * @property string $levelTwoCaption
 * @property string $levelTwoTaxCodeXref
 * @property string $levelTwoAgencyXref
 * @property boolean $levelTwoServicesFlag
 * @property boolean $levelTwoExpensesFlag
 * @property boolean $levelTwoProductsFlag
 * @property boolean $levelTwoApplySingleUnitFlag
 * @property number $levelTwoApplySingleUnitMin
 * @property number $levelTwoApplySingleUnitMax
 * @property number $levelThreeRate
 * @property string $levelThreeRateType
 * @property number $levelThreeTaxableMax
 * @property string $levelThreeCaption
 * @property string $levelThreeTaxCodeXref
 * @property string $levelThreeAgencyXref
 * @property boolean $levelThreeServicesFlag
 * @property boolean $levelThreeExpensesFlag
 * @property boolean $levelThreeProductsFlag
 * @property boolean $levelThreeApplySingleUnitFlag
 * @property number $levelThreeApplySingleUnitMin
 * @property number $levelThreeApplySingleUnitMax
 * @property number $levelFourRate
 * @property string $levelFourRateType
 * @property number $levelFourTaxableMax
 * @property string $levelFourCaption
 * @property string $levelFourTaxCodeXref
 * @property string $levelFourAgencyXref
 * @property boolean $levelFourServicesFlag
 * @property boolean $levelFourExpensesFlag
 * @property boolean $levelFourProductsFlag
 * @property boolean $levelFourApplySingleUnitFlag
 * @property number $levelFourApplySingleUnitMin
 * @property number $levelFourApplySingleUnitMax
 * @property number $levelFiveRate
 * @property string $levelFiveRateType
 * @property number $levelFiveTaxableMax
 * @property string $levelFiveCaption
 * @property string $levelFiveTaxCodeXref
 * @property string $levelFiveAgencyXref
 * @property boolean $levelFiveServicesFlag
 * @property boolean $levelFiveExpensesFlag
 * @property boolean $levelFiveProductsFlag
 * @property boolean $levelFiveApplySingleUnitFlag
 * @property number $levelFiveApplySingleUnitMin
 * @property number $levelFiveApplySingleUnitMax
 * @property number $levelSixRate
 * @property string $levelSixRateType
 * @property number $levelSixTaxableMax
 * @property string $levelSixCaption
 * @property string $levelSixTaxCodeXref
 * @property string $levelSixAgencyXref
 * @property boolean $levelSixServicesFlag
 * @property boolean $levelSixExpensesFlag
 * @property boolean $levelSixProductsFlag
 * @property boolean $levelSixApplySingleUnitFlag
 * @property number $levelSixApplySingleUnitMin
 * @property number $levelSixApplySingleUnitMax
 * @property array $workRoleIds
 * @property boolean $addAllWorkRoles
 * @property boolean $removeAllWorkRoles
 * @property array $expenseTypeIds
 * @property boolean $addAllExpenseTypes
 * @property boolean $removeAllExpenseTypes
 * @property array $productTypeIds
 * @property boolean $addAllProductTypes
 * @property boolean $removeAllProductTypes
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\Metadata $_info
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
        'country' => 'Spinen\ConnectWise\Models\v2018_4\Finance\CountryReference',
        'effectiveDate' => 'string',
        'defaultFlag' => 'boolean',
        'displayOnInvoiceFlag' => 'boolean',
        'canadaCalculateGSTFlag' => 'boolean',
        'cancelDate' => 'string',
        'levelOneRate' => 'number',
        'levelOneRateType' => 'string',
        'levelOneTaxableMax' => 'number',
        'levelOneCaption' => 'string',
        'levelOneTaxCodeXref' => 'string',
        'levelOneAgencyXref' => 'string',
        'levelOneServicesFlag' => 'boolean',
        'levelOneExpensesFlag' => 'boolean',
        'levelOneProductsFlag' => 'boolean',
        'levelOneApplySingleUnitFlag' => 'boolean',
        'levelOneApplySingleUnitMin' => 'number',
        'levelOneApplySingleUnitMax' => 'number',
        'levelTwoRate' => 'number',
        'levelTwoRateType' => 'string',
        'levelTwoTaxableMax' => 'number',
        'levelTwoCaption' => 'string',
        'levelTwoTaxCodeXref' => 'string',
        'levelTwoAgencyXref' => 'string',
        'levelTwoServicesFlag' => 'boolean',
        'levelTwoExpensesFlag' => 'boolean',
        'levelTwoProductsFlag' => 'boolean',
        'levelTwoApplySingleUnitFlag' => 'boolean',
        'levelTwoApplySingleUnitMin' => 'number',
        'levelTwoApplySingleUnitMax' => 'number',
        'levelThreeRate' => 'number',
        'levelThreeRateType' => 'string',
        'levelThreeTaxableMax' => 'number',
        'levelThreeCaption' => 'string',
        'levelThreeTaxCodeXref' => 'string',
        'levelThreeAgencyXref' => 'string',
        'levelThreeServicesFlag' => 'boolean',
        'levelThreeExpensesFlag' => 'boolean',
        'levelThreeProductsFlag' => 'boolean',
        'levelThreeApplySingleUnitFlag' => 'boolean',
        'levelThreeApplySingleUnitMin' => 'number',
        'levelThreeApplySingleUnitMax' => 'number',
        'levelFourRate' => 'number',
        'levelFourRateType' => 'string',
        'levelFourTaxableMax' => 'number',
        'levelFourCaption' => 'string',
        'levelFourTaxCodeXref' => 'string',
        'levelFourAgencyXref' => 'string',
        'levelFourServicesFlag' => 'boolean',
        'levelFourExpensesFlag' => 'boolean',
        'levelFourProductsFlag' => 'boolean',
        'levelFourApplySingleUnitFlag' => 'boolean',
        'levelFourApplySingleUnitMin' => 'number',
        'levelFourApplySingleUnitMax' => 'number',
        'levelFiveRate' => 'number',
        'levelFiveRateType' => 'string',
        'levelFiveTaxableMax' => 'number',
        'levelFiveCaption' => 'string',
        'levelFiveTaxCodeXref' => 'string',
        'levelFiveAgencyXref' => 'string',
        'levelFiveServicesFlag' => 'boolean',
        'levelFiveExpensesFlag' => 'boolean',
        'levelFiveProductsFlag' => 'boolean',
        'levelFiveApplySingleUnitFlag' => 'boolean',
        'levelFiveApplySingleUnitMin' => 'number',
        'levelFiveApplySingleUnitMax' => 'number',
        'levelSixRate' => 'number',
        'levelSixRateType' => 'string',
        'levelSixTaxableMax' => 'number',
        'levelSixCaption' => 'string',
        'levelSixTaxCodeXref' => 'string',
        'levelSixAgencyXref' => 'string',
        'levelSixServicesFlag' => 'boolean',
        'levelSixExpensesFlag' => 'boolean',
        'levelSixProductsFlag' => 'boolean',
        'levelSixApplySingleUnitFlag' => 'boolean',
        'levelSixApplySingleUnitMin' => 'number',
        'levelSixApplySingleUnitMax' => 'number',
        'workRoleIds' => 'array',
        'addAllWorkRoles' => 'boolean',
        'removeAllWorkRoles' => 'boolean',
        'expenseTypeIds' => 'array',
        'addAllExpenseTypes' => 'boolean',
        'removeAllExpenseTypes' => 'boolean',
        'productTypeIds' => 'array',
        'addAllProductTypes' => 'boolean',
        'removeAllProductTypes' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Finance\Metadata',
    ];
}
