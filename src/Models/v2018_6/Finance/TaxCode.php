<?php

namespace Spinen\ConnectWise\Models\v2018_6\Finance;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class TaxCode Version v2018_6
 *
 * Model for TaxCode
 *
 * @property Carbon $cancelDate
 * @property Carbon $effectiveDate
 * @property CountryReference $country
 * @property Metadata $_info
 * @property array $expenseTypeIds
 * @property array $productTypeIds
 * @property array $workRoleIds
 * @property bool $addAllExpenseTypes
 * @property bool $addAllProductTypes
 * @property bool $addAllWorkRoles
 * @property bool $canadaCalculateGSTFlag
 * @property bool $defaultFlag
 * @property bool $displayOnInvoiceFlag
 * @property bool $levelFiveApplySingleUnitFlag
 * @property bool $levelFiveExpensesFlag
 * @property bool $levelFiveProductsFlag
 * @property bool $levelFiveServicesFlag
 * @property bool $levelFourApplySingleUnitFlag
 * @property bool $levelFourExpensesFlag
 * @property bool $levelFourProductsFlag
 * @property bool $levelFourServicesFlag
 * @property bool $levelOneApplySingleUnitFlag
 * @property bool $levelOneExpensesFlag
 * @property bool $levelOneProductsFlag
 * @property bool $levelOneServicesFlag
 * @property bool $levelSixApplySingleUnitFlag
 * @property bool $levelSixExpensesFlag
 * @property bool $levelSixProductsFlag
 * @property bool $levelSixServicesFlag
 * @property bool $levelThreeApplySingleUnitFlag
 * @property bool $levelThreeExpensesFlag
 * @property bool $levelThreeProductsFlag
 * @property bool $levelThreeServicesFlag
 * @property bool $levelTwoApplySingleUnitFlag
 * @property bool $levelTwoExpensesFlag
 * @property bool $levelTwoProductsFlag
 * @property bool $levelTwoServicesFlag
 * @property bool $removeAllExpenseTypes
 * @property bool $removeAllProductTypes
 * @property bool $removeAllWorkRoles
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
 * @property int $id
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
        '_info' => Metadata::class,
        'addAllExpenseTypes' => 'boolean',
        'addAllProductTypes' => 'boolean',
        'addAllWorkRoles' => 'boolean',
        'canadaCalculateGSTFlag' => 'boolean',
        'cancelDate' => Carbon::class,
        'country' => CountryReference::class,
        'defaultFlag' => 'boolean',
        'description' => 'string',
        'displayOnInvoiceFlag' => 'boolean',
        'effectiveDate' => Carbon::class,
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
