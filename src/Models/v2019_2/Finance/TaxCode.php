<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TaxCode Version v2019_2
 *
 * Model for TaxCode
 *
 * @property integer $id
 * @property string $identifier
 * @property string $description
 * @property string $invoiceCaption
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\CountryReference $country
 * @property Carbon\Carbon $effectiveDate
 * @property boolean $defaultFlag
 * @property boolean $displayOnInvoiceFlag
 * @property boolean $canadaCalculateGSTFlag
 * @property Carbon\Carbon $cancelDate
 * @property float $levelOneRate
 * @property string $levelOneRateType
 * @property float $levelOneTaxableMax
 * @property string $levelOneCaption
 * @property string $levelOneTaxCodeXref
 * @property string $levelOneAgencyXref
 * @property boolean $levelOneServicesFlag
 * @property boolean $levelOneExpensesFlag
 * @property boolean $levelOneProductsFlag
 * @property boolean $levelOneApplySingleUnitFlag
 * @property float $levelOneApplySingleUnitMin
 * @property float $levelOneApplySingleUnitMax
 * @property float $levelTwoRate
 * @property string $levelTwoRateType
 * @property float $levelTwoTaxableMax
 * @property string $levelTwoCaption
 * @property string $levelTwoTaxCodeXref
 * @property string $levelTwoAgencyXref
 * @property boolean $levelTwoServicesFlag
 * @property boolean $levelTwoExpensesFlag
 * @property boolean $levelTwoProductsFlag
 * @property boolean $levelTwoApplySingleUnitFlag
 * @property float $levelTwoApplySingleUnitMin
 * @property float $levelTwoApplySingleUnitMax
 * @property float $levelThreeRate
 * @property string $levelThreeRateType
 * @property float $levelThreeTaxableMax
 * @property string $levelThreeCaption
 * @property string $levelThreeTaxCodeXref
 * @property string $levelThreeAgencyXref
 * @property boolean $levelThreeServicesFlag
 * @property boolean $levelThreeExpensesFlag
 * @property boolean $levelThreeProductsFlag
 * @property boolean $levelThreeApplySingleUnitFlag
 * @property float $levelThreeApplySingleUnitMin
 * @property float $levelThreeApplySingleUnitMax
 * @property float $levelFourRate
 * @property string $levelFourRateType
 * @property float $levelFourTaxableMax
 * @property string $levelFourCaption
 * @property string $levelFourTaxCodeXref
 * @property string $levelFourAgencyXref
 * @property boolean $levelFourServicesFlag
 * @property boolean $levelFourExpensesFlag
 * @property boolean $levelFourProductsFlag
 * @property boolean $levelFourApplySingleUnitFlag
 * @property float $levelFourApplySingleUnitMin
 * @property float $levelFourApplySingleUnitMax
 * @property float $levelFiveRate
 * @property string $levelFiveRateType
 * @property float $levelFiveTaxableMax
 * @property string $levelFiveCaption
 * @property string $levelFiveTaxCodeXref
 * @property string $levelFiveAgencyXref
 * @property boolean $levelFiveServicesFlag
 * @property boolean $levelFiveExpensesFlag
 * @property boolean $levelFiveProductsFlag
 * @property boolean $levelFiveApplySingleUnitFlag
 * @property float $levelFiveApplySingleUnitMin
 * @property float $levelFiveApplySingleUnitMax
 * @property float $levelSixRate
 * @property string $levelSixRateType
 * @property float $levelSixTaxableMax
 * @property string $levelSixCaption
 * @property string $levelSixTaxCodeXref
 * @property string $levelSixAgencyXref
 * @property boolean $levelSixServicesFlag
 * @property boolean $levelSixExpensesFlag
 * @property boolean $levelSixProductsFlag
 * @property boolean $levelSixApplySingleUnitFlag
 * @property float $levelSixApplySingleUnitMin
 * @property float $levelSixApplySingleUnitMax
 * @property array $workRoleIds
 * @property boolean $addAllWorkRoles
 * @property boolean $removeAllWorkRoles
 * @property array $expenseTypeIds
 * @property boolean $addAllExpenseTypes
 * @property boolean $removeAllExpenseTypes
 * @property array $productTypeIds
 * @property boolean $addAllProductTypes
 * @property boolean $removeAllProductTypes
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\Metadata $_info
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
        'country' => 'Spinen\ConnectWise\Models\v2019_2\Finance\CountryReference',
        'effectiveDate' => 'Carbon\Carbon',
        'defaultFlag' => 'boolean',
        'displayOnInvoiceFlag' => 'boolean',
        'canadaCalculateGSTFlag' => 'boolean',
        'cancelDate' => 'Carbon\Carbon',
        'levelOneRate' => 'float',
        'levelOneRateType' => 'string',
        'levelOneTaxableMax' => 'float',
        'levelOneCaption' => 'string',
        'levelOneTaxCodeXref' => 'string',
        'levelOneAgencyXref' => 'string',
        'levelOneServicesFlag' => 'boolean',
        'levelOneExpensesFlag' => 'boolean',
        'levelOneProductsFlag' => 'boolean',
        'levelOneApplySingleUnitFlag' => 'boolean',
        'levelOneApplySingleUnitMin' => 'float',
        'levelOneApplySingleUnitMax' => 'float',
        'levelTwoRate' => 'float',
        'levelTwoRateType' => 'string',
        'levelTwoTaxableMax' => 'float',
        'levelTwoCaption' => 'string',
        'levelTwoTaxCodeXref' => 'string',
        'levelTwoAgencyXref' => 'string',
        'levelTwoServicesFlag' => 'boolean',
        'levelTwoExpensesFlag' => 'boolean',
        'levelTwoProductsFlag' => 'boolean',
        'levelTwoApplySingleUnitFlag' => 'boolean',
        'levelTwoApplySingleUnitMin' => 'float',
        'levelTwoApplySingleUnitMax' => 'float',
        'levelThreeRate' => 'float',
        'levelThreeRateType' => 'string',
        'levelThreeTaxableMax' => 'float',
        'levelThreeCaption' => 'string',
        'levelThreeTaxCodeXref' => 'string',
        'levelThreeAgencyXref' => 'string',
        'levelThreeServicesFlag' => 'boolean',
        'levelThreeExpensesFlag' => 'boolean',
        'levelThreeProductsFlag' => 'boolean',
        'levelThreeApplySingleUnitFlag' => 'boolean',
        'levelThreeApplySingleUnitMin' => 'float',
        'levelThreeApplySingleUnitMax' => 'float',
        'levelFourRate' => 'float',
        'levelFourRateType' => 'string',
        'levelFourTaxableMax' => 'float',
        'levelFourCaption' => 'string',
        'levelFourTaxCodeXref' => 'string',
        'levelFourAgencyXref' => 'string',
        'levelFourServicesFlag' => 'boolean',
        'levelFourExpensesFlag' => 'boolean',
        'levelFourProductsFlag' => 'boolean',
        'levelFourApplySingleUnitFlag' => 'boolean',
        'levelFourApplySingleUnitMin' => 'float',
        'levelFourApplySingleUnitMax' => 'float',
        'levelFiveRate' => 'float',
        'levelFiveRateType' => 'string',
        'levelFiveTaxableMax' => 'float',
        'levelFiveCaption' => 'string',
        'levelFiveTaxCodeXref' => 'string',
        'levelFiveAgencyXref' => 'string',
        'levelFiveServicesFlag' => 'boolean',
        'levelFiveExpensesFlag' => 'boolean',
        'levelFiveProductsFlag' => 'boolean',
        'levelFiveApplySingleUnitFlag' => 'boolean',
        'levelFiveApplySingleUnitMin' => 'float',
        'levelFiveApplySingleUnitMax' => 'float',
        'levelSixRate' => 'float',
        'levelSixRateType' => 'string',
        'levelSixTaxableMax' => 'float',
        'levelSixCaption' => 'string',
        'levelSixTaxCodeXref' => 'string',
        'levelSixAgencyXref' => 'string',
        'levelSixServicesFlag' => 'boolean',
        'levelSixExpensesFlag' => 'boolean',
        'levelSixProductsFlag' => 'boolean',
        'levelSixApplySingleUnitFlag' => 'boolean',
        'levelSixApplySingleUnitMin' => 'float',
        'levelSixApplySingleUnitMax' => 'float',
        'workRoleIds' => 'array',
        'addAllWorkRoles' => 'boolean',
        'removeAllWorkRoles' => 'boolean',
        'expenseTypeIds' => 'array',
        'addAllExpenseTypes' => 'boolean',
        'removeAllExpenseTypes' => 'boolean',
        'productTypeIds' => 'array',
        'addAllProductTypes' => 'boolean',
        'removeAllProductTypes' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Finance\Metadata',
    ];
}
