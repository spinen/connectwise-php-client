<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportTransactionDetail Version v2019_1
 * 
 * Model for GLExportTransactionDetail
 *
 * @property integer $id
 * @property Carbon\Carbon $documentDate
 * @property string $documentType
 * @property string $accountNumber
 * @property string $glClass
 * @property string $glTypeId
 * @property string $glItemId
 * @property integer $invoiceSummaryOption
 * @property float $cost
 * @property string $salesCode
 * @property string $memo
 * @property string $description
 * @property float $quantity
 * @property float $total
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\TimeEntryReference $timeEntry
 * @property string $costAccountNumber
 * @property string $inventoryAccountNumber
 * @property string $productAccountNumber
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\TaxCodeReference $taxCode
 * @property string $taxCodeXref
 * @property string $taxAgencyXref
 * @property string $taxNote
 * @property float $taxRate
 * @property float $taxRatePercent
 * @property boolean $taxableFlag
 * @property boolean $taxable2Flag
 * @property boolean $taxable3Flag
 * @property boolean $taxable4Flag
 * @property boolean $taxable5Flag
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\IvItemReference $item
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\ProductReference $product
 * @property boolean $itemTaxableFlag
 * @property float $itemPrice
 * @property float $itemCost
 * @property string $itemDescription
 * @property string $salesDescription
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\UnitOfMeasureReference $unitOfMeasure
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\ProductSubCategoryReference $subCategory
 * @property boolean $serializedFlag
 * @property string $serialNumbers
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\SiteReference $warehouseSite
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\WarehouseBinReference $warehouseBin
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\ShipmentMethodReference $shipmentMethod
 * @property boolean $dropShippedFlag
 * @property string $itemTypeXref
 * @property string $inventoryXref
 * @property string $cogsXref
 * @property string $uomScheduleXref
 * @property string $priceLevelXref
 * @property string $locationXref
 * @property array $taxLevels
 */
class GLExportTransactionDetail extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'documentDate' => 'Carbon\Carbon',
        'documentType' => 'string',
        'accountNumber' => 'string',
        'glClass' => 'string',
        'glTypeId' => 'string',
        'glItemId' => 'string',
        'invoiceSummaryOption' => 'integer',
        'cost' => 'float',
        'salesCode' => 'string',
        'memo' => 'string',
        'description' => 'string',
        'quantity' => 'float',
        'total' => 'float',
        'currency' => 'Spinen\ConnectWise\Models\v2019_1\Finance\CurrencyReference',
        'timeEntry' => 'Spinen\ConnectWise\Models\v2019_1\Finance\TimeEntryReference',
        'costAccountNumber' => 'string',
        'inventoryAccountNumber' => 'string',
        'productAccountNumber' => 'string',
        'taxCode' => 'Spinen\ConnectWise\Models\v2019_1\Finance\TaxCodeReference',
        'taxCodeXref' => 'string',
        'taxAgencyXref' => 'string',
        'taxNote' => 'string',
        'taxRate' => 'float',
        'taxRatePercent' => 'float',
        'taxableFlag' => 'boolean',
        'taxable2Flag' => 'boolean',
        'taxable3Flag' => 'boolean',
        'taxable4Flag' => 'boolean',
        'taxable5Flag' => 'boolean',
        'item' => 'Spinen\ConnectWise\Models\v2019_1\Finance\IvItemReference',
        'product' => 'Spinen\ConnectWise\Models\v2019_1\Finance\ProductReference',
        'itemTaxableFlag' => 'boolean',
        'itemPrice' => 'float',
        'itemCost' => 'float',
        'itemDescription' => 'string',
        'salesDescription' => 'string',
        'unitOfMeasure' => 'Spinen\ConnectWise\Models\v2019_1\Finance\UnitOfMeasureReference',
        'subCategory' => 'Spinen\ConnectWise\Models\v2019_1\Finance\ProductSubCategoryReference',
        'serializedFlag' => 'boolean',
        'serialNumbers' => 'string',
        'warehouseSite' => 'Spinen\ConnectWise\Models\v2019_1\Finance\SiteReference',
        'warehouseBin' => 'Spinen\ConnectWise\Models\v2019_1\Finance\WarehouseBinReference',
        'shipmentMethod' => 'Spinen\ConnectWise\Models\v2019_1\Finance\ShipmentMethodReference',
        'dropShippedFlag' => 'boolean',
        'itemTypeXref' => 'string',
        'inventoryXref' => 'string',
        'cogsXref' => 'string',
        'uomScheduleXref' => 'string',
        'priceLevelXref' => 'string',
        'locationXref' => 'string',
        'taxLevels' => 'array',
    ];
}
