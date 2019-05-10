<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportTransactionDetail Version v2019_2
 *
 * Model for GLExportTransactionDetail
 *
 * @property Carbon\Carbon $documentDate
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\IvItemReference $item
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\ProductReference $product
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\ProductSubCategoryReference $subCategory
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\ShipmentMethodReference $shipmentMethod
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\SiteReference $warehouseSite
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\TaxCodeReference $taxCode
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\TimeEntryReference $timeEntry
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\UnitOfMeasureReference $unitOfMeasure
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\WarehouseBinReference $warehouseBin
 * @property array $taxLevels
 * @property boolean $dropShippedFlag
 * @property boolean $itemTaxableFlag
 * @property boolean $serializedFlag
 * @property boolean $taxable2Flag
 * @property boolean $taxable3Flag
 * @property boolean $taxable4Flag
 * @property boolean $taxable5Flag
 * @property boolean $taxableFlag
 * @property float $cost
 * @property float $itemCost
 * @property float $itemPrice
 * @property float $quantity
 * @property float $taxRate
 * @property float $taxRatePercent
 * @property float $total
 * @property integer $id
 * @property integer $invoiceSummaryOption
 * @property string $accountNumber
 * @property string $cogsXref
 * @property string $costAccountNumber
 * @property string $description
 * @property string $documentType
 * @property string $glClass
 * @property string $glItemId
 * @property string $glTypeId
 * @property string $inventoryAccountNumber
 * @property string $inventoryXref
 * @property string $itemDescription
 * @property string $itemTypeXref
 * @property string $locationXref
 * @property string $memo
 * @property string $priceLevelXref
 * @property string $productAccountNumber
 * @property string $salesCode
 * @property string $salesDescription
 * @property string $serialNumbers
 * @property string $taxAgencyXref
 * @property string $taxCodeXref
 * @property string $taxNote
 * @property string $uomScheduleXref
 */
class GLExportTransactionDetail extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'accountNumber' => 'string',
        'cogsXref' => 'string',
        'cost' => 'float',
        'costAccountNumber' => 'string',
        'currency' => 'Spinen\ConnectWise\Models\v2019_2\Finance\CurrencyReference',
        'description' => 'string',
        'documentDate' => 'Carbon\Carbon',
        'documentType' => 'string',
        'dropShippedFlag' => 'boolean',
        'glClass' => 'string',
        'glItemId' => 'string',
        'glTypeId' => 'string',
        'id' => 'integer',
        'inventoryAccountNumber' => 'string',
        'inventoryXref' => 'string',
        'invoiceSummaryOption' => 'integer',
        'item' => 'Spinen\ConnectWise\Models\v2019_2\Finance\IvItemReference',
        'itemCost' => 'float',
        'itemDescription' => 'string',
        'itemPrice' => 'float',
        'itemTaxableFlag' => 'boolean',
        'itemTypeXref' => 'string',
        'locationXref' => 'string',
        'memo' => 'string',
        'priceLevelXref' => 'string',
        'product' => 'Spinen\ConnectWise\Models\v2019_2\Finance\ProductReference',
        'productAccountNumber' => 'string',
        'quantity' => 'float',
        'salesCode' => 'string',
        'salesDescription' => 'string',
        'serialNumbers' => 'string',
        'serializedFlag' => 'boolean',
        'shipmentMethod' => 'Spinen\ConnectWise\Models\v2019_2\Finance\ShipmentMethodReference',
        'subCategory' => 'Spinen\ConnectWise\Models\v2019_2\Finance\ProductSubCategoryReference',
        'taxAgencyXref' => 'string',
        'taxCode' => 'Spinen\ConnectWise\Models\v2019_2\Finance\TaxCodeReference',
        'taxCodeXref' => 'string',
        'taxLevels' => 'array',
        'taxNote' => 'string',
        'taxRate' => 'float',
        'taxRatePercent' => 'float',
        'taxable2Flag' => 'boolean',
        'taxable3Flag' => 'boolean',
        'taxable4Flag' => 'boolean',
        'taxable5Flag' => 'boolean',
        'taxableFlag' => 'boolean',
        'timeEntry' => 'Spinen\ConnectWise\Models\v2019_2\Finance\TimeEntryReference',
        'total' => 'float',
        'unitOfMeasure' => 'Spinen\ConnectWise\Models\v2019_2\Finance\UnitOfMeasureReference',
        'uomScheduleXref' => 'string',
        'warehouseBin' => 'Spinen\ConnectWise\Models\v2019_2\Finance\WarehouseBinReference',
        'warehouseSite' => 'Spinen\ConnectWise\Models\v2019_2\Finance\SiteReference',
    ];
}
