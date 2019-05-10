<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TaxCode Version v2018_5
 *
 * Model for TaxCode
 *
 * @property Carbon\Carbon $cancelDate
 * @property Carbon\Carbon $effectiveDate
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\CountryReference $country
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\Metadata $_info
 * @property array $expenseTypeIds
 * @property array $productTypeIds
 * @property array $workRoleIds
 * @property boolean $addAllExpenseTypes
 * @property boolean $addAllProductTypes
 * @property boolean $addAllWorkRoles
 * @property boolean $canadaCalculateGSTFlag
 * @property boolean $defaultFlag
 * @property boolean $displayOnInvoiceFlag
 * @property boolean $levelFiveApplySingleUnitFlag
 * @property boolean $levelFiveExpensesFlag
 * @property boolean $levelFiveProductsFlag
 * @property boolean $levelFiveServicesFlag
 * @property boolean $levelFourApplySingleUnitFlag
 * @property boolean $levelFourExpensesFlag
 * @property boolean $levelFourProductsFlag
 * @property boolean $levelFourServicesFlag
 * @property boolean $levelOneApplySingleUnitFlag
 * @property boolean $levelOneExpensesFlag
 * @property boolean $levelOneProductsFlag
 * @property boolean $levelOneServicesFlag
 * @property boolean $levelSixApplySingleUnitFlag
 * @property boolean $levelSixExpensesFlag
 * @property boolean $levelSixProductsFlag
 * @property boolean $levelSixServicesFlag
 * @property boolean $levelThreeApplySingleUnitFlag
 * @property boolean $levelThreeExpensesFlag
 * @property boolean $levelThreeProductsFlag
 * @property boolean $levelThreeServicesFlag
 * @property boolean $levelTwoApplySingleUnitFlag
 * @property boolean $levelTwoExpensesFlag
 * @property boolean $levelTwoProductsFlag
 * @property boolean $levelTwoServicesFlag
 * @property boolean $removeAllExpenseTypes
 * @property boolean $removeAllProductTypes
 * @property boolean $removeAllWorkRoles
 * @property float $levelFiveApplySingleUnitMax
 * @property float $levelFiveApplySingleUnitMin
 * @property float $levelFiveRate
 * @property float $levelFiveTaxableMax
 * @property float $levelFourApplySingleUnitMax
 * @property float $levelFourApplySingleUnitMin
 * @property float $levelFourRate
 * @property float $levelFourTaxableMax
 * @property float $levelOneApplySingleUnitMax
 * @property float $levelOneApplySingleUnitMin
 * @property float $levelOneRate
 * @property float $levelOneTaxableMax
 * @property float $levelSixApplySingleUnitMax
 * @property float $levelSixApplySingleUnitMin
 * @property float $levelSixRate
 * @property float $levelSixTaxableMax
 * @property float $levelThreeApplySingleUnitMax
 * @property float $levelThreeApplySingleUnitMin
 * @property float $levelThreeRate
 * @property float $levelThreeTaxableMax
 * @property float $levelTwoApplySingleUnitMax
 * @property float $levelTwoApplySingleUnitMin
 * @property float $levelTwoRate
 * @property float $levelTwoTaxableMax
 * @property integer $id
 * @property string $description
 * @property string $identifier
 * @property string $invoiceCaption
 * @property string $levelFiveAgencyXref
 * @property string $levelFiveCaption
 * @property string $levelFiveRateType
 * @property string $levelFiveTaxCodeXref
 * @property string $levelFourAgencyXref
 * @property string $levelFourCaption
 * @property string $levelFourRateType
 * @property string $levelFourTaxCodeXref
 * @property string $levelOneAgencyXref
 * @property string $levelOneCaption
 * @property string $levelOneRateType
 * @property string $levelOneTaxCodeXref
 * @property string $levelSixAgencyXref
 * @property string $levelSixCaption
 * @property string $levelSixRateType
 * @property string $levelSixTaxCodeXref
 * @property string $levelThreeAgencyXref
 * @property string $levelThreeCaption
 * @property string $levelThreeRateType
 * @property string $levelThreeTaxCodeXref
 * @property string $levelTwoAgencyXref
 * @property string $levelTwoCaption
 * @property string $levelTwoRateType
 * @property string $levelTwoTaxCodeXref
 */
class TaxCode extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Finance\Metadata',
        'addAllExpenseTypes' => 'boolean',
        'addAllProductTypes' => 'boolean',
        'addAllWorkRoles' => 'boolean',
        'canadaCalculateGSTFlag' => 'boolean',
        'cancelDate' => 'Carbon\Carbon',
        'country' => 'Spinen\ConnectWise\Models\v2018_5\Finance\CountryReference',
        'defaultFlag' => 'boolean',
        'description' => 'string',
        'displayOnInvoiceFlag' => 'boolean',
        'effectiveDate' => 'Carbon\Carbon',
        'expenseTypeIds' => 'array',
        'id' => 'integer',
        'identifier' => 'string',
        'invoiceCaption' => 'string',
        'levelFiveAgencyXref' => 'string',
        'levelFiveApplySingleUnitFlag' => 'boolean',
        'levelFiveApplySingleUnitMax' => 'float',
        'levelFiveApplySingleUnitMin' => 'float',
        'levelFiveCaption' => 'string',
        'levelFiveExpensesFlag' => 'boolean',
        'levelFiveProductsFlag' => 'boolean',
        'levelFiveRate' => 'float',
        'levelFiveRateType' => 'string',
        'levelFiveServicesFlag' => 'boolean',
        'levelFiveTaxCodeXref' => 'string',
        'levelFiveTaxableMax' => 'float',
        'levelFourAgencyXref' => 'string',
        'levelFourApplySingleUnitFlag' => 'boolean',
        'levelFourApplySingleUnitMax' => 'float',
        'levelFourApplySingleUnitMin' => 'float',
        'levelFourCaption' => 'string',
        'levelFourExpensesFlag' => 'boolean',
        'levelFourProductsFlag' => 'boolean',
        'levelFourRate' => 'float',
        'levelFourRateType' => 'string',
        'levelFourServicesFlag' => 'boolean',
        'levelFourTaxCodeXref' => 'string',
        'levelFourTaxableMax' => 'float',
        'levelOneAgencyXref' => 'string',
        'levelOneApplySingleUnitFlag' => 'boolean',
        'levelOneApplySingleUnitMax' => 'float',
        'levelOneApplySingleUnitMin' => 'float',
        'levelOneCaption' => 'string',
        'levelOneExpensesFlag' => 'boolean',
        'levelOneProductsFlag' => 'boolean',
        'levelOneRate' => 'float',
        'levelOneRateType' => 'string',
        'levelOneServicesFlag' => 'boolean',
        'levelOneTaxCodeXref' => 'string',
        'levelOneTaxableMax' => 'float',
        'levelSixAgencyXref' => 'string',
        'levelSixApplySingleUnitFlag' => 'boolean',
        'levelSixApplySingleUnitMax' => 'float',
        'levelSixApplySingleUnitMin' => 'float',
        'levelSixCaption' => 'string',
        'levelSixExpensesFlag' => 'boolean',
        'levelSixProductsFlag' => 'boolean',
        'levelSixRate' => 'float',
        'levelSixRateType' => 'string',
        'levelSixServicesFlag' => 'boolean',
        'levelSixTaxCodeXref' => 'string',
        'levelSixTaxableMax' => 'float',
        'levelThreeAgencyXref' => 'string',
        'levelThreeApplySingleUnitFlag' => 'boolean',
        'levelThreeApplySingleUnitMax' => 'float',
        'levelThreeApplySingleUnitMin' => 'float',
        'levelThreeCaption' => 'string',
        'levelThreeExpensesFlag' => 'boolean',
        'levelThreeProductsFlag' => 'boolean',
        'levelThreeRate' => 'float',
        'levelThreeRateType' => 'string',
        'levelThreeServicesFlag' => 'boolean',
        'levelThreeTaxCodeXref' => 'string',
        'levelThreeTaxableMax' => 'float',
        'levelTwoAgencyXref' => 'string',
        'levelTwoApplySingleUnitFlag' => 'boolean',
        'levelTwoApplySingleUnitMax' => 'float',
        'levelTwoApplySingleUnitMin' => 'float',
        'levelTwoCaption' => 'string',
        'levelTwoExpensesFlag' => 'boolean',
        'levelTwoProductsFlag' => 'boolean',
        'levelTwoRate' => 'float',
        'levelTwoRateType' => 'string',
        'levelTwoServicesFlag' => 'boolean',
        'levelTwoTaxCodeXref' => 'string',
        'levelTwoTaxableMax' => 'float',
        'productTypeIds' => 'array',
        'removeAllExpenseTypes' => 'boolean',
        'removeAllProductTypes' => 'boolean',
        'removeAllWorkRoles' => 'boolean',
        'workRoleIds' => 'array',
    ];
}
