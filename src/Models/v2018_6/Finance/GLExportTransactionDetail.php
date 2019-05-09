<?php

namespace Spinen\ConnectWise\Models\v2018_6\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportTransactionDetail Version v2018_6
 * 
 * Model for GLExportTransactionDetail
 *
 * @property integer $id
 * @property string $documentDate
 * @property string $documentType
 * @property string $accountNumber
 * @property string $glClass
 * @property string $glTypeId
 * @property string $glItemId
 * @property integer $invoiceSummaryOption
 * @property number $cost
 * @property string $salesCode
 * @property string $memo
 * @property string $description
 * @property number $quantity
 * @property number $total
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\TimeEntryReference $timeEntry
 * @property string $costAccountNumber
 * @property string $inventoryAccountNumber
 * @property string $productAccountNumber
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\TaxCodeReference $taxCode
 * @property string $taxCodeXref
 * @property string $taxAgencyXref
 * @property string $taxNote
 * @property number $taxRate
 * @property number $taxRatePercent
 * @property boolean $taxableFlag
 * @property boolean $taxable2Flag
 * @property boolean $taxable3Flag
 * @property boolean $taxable4Flag
 * @property boolean $taxable5Flag
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\IvItemReference $item
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\ProductReference $product
 * @property boolean $itemTaxableFlag
 * @property number $itemPrice
 * @property number $itemCost
 * @property string $itemDescription
 * @property string $salesDescription
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\UnitOfMeasureReference $unitOfMeasure
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\ProductSubCategoryReference $subCategory
 * @property boolean $serializedFlag
 * @property string $serialNumbers
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\SiteReference $warehouseSite
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\WarehouseBinReference $warehouseBin
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\ShipmentMethodReference $shipmentMethod
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
        'documentDate' => 'string',
        'documentType' => 'string',
        'accountNumber' => 'string',
        'glClass' => 'string',
        'glTypeId' => 'string',
        'glItemId' => 'string',
        'invoiceSummaryOption' => 'integer',
        'cost' => 'number',
        'salesCode' => 'string',
        'memo' => 'string',
        'description' => 'string',
        'quantity' => 'number',
        'total' => 'number',
        'currency' => 'Spinen\ConnectWise\Models\v2018_6\Finance\CurrencyReference',
        'timeEntry' => 'Spinen\ConnectWise\Models\v2018_6\Finance\TimeEntryReference',
        'costAccountNumber' => 'string',
        'inventoryAccountNumber' => 'string',
        'productAccountNumber' => 'string',
        'taxCode' => 'Spinen\ConnectWise\Models\v2018_6\Finance\TaxCodeReference',
        'taxCodeXref' => 'string',
        'taxAgencyXref' => 'string',
        'taxNote' => 'string',
        'taxRate' => 'number',
        'taxRatePercent' => 'number',
        'taxableFlag' => 'boolean',
        'taxable2Flag' => 'boolean',
        'taxable3Flag' => 'boolean',
        'taxable4Flag' => 'boolean',
        'taxable5Flag' => 'boolean',
        'item' => 'Spinen\ConnectWise\Models\v2018_6\Finance\IvItemReference',
        'product' => 'Spinen\ConnectWise\Models\v2018_6\Finance\ProductReference',
        'itemTaxableFlag' => 'boolean',
        'itemPrice' => 'number',
        'itemCost' => 'number',
        'itemDescription' => 'string',
        'salesDescription' => 'string',
        'unitOfMeasure' => 'Spinen\ConnectWise\Models\v2018_6\Finance\UnitOfMeasureReference',
        'subCategory' => 'Spinen\ConnectWise\Models\v2018_6\Finance\ProductSubCategoryReference',
        'serializedFlag' => 'boolean',
        'serialNumbers' => 'string',
        'warehouseSite' => 'Spinen\ConnectWise\Models\v2018_6\Finance\SiteReference',
        'warehouseBin' => 'Spinen\ConnectWise\Models\v2018_6\Finance\WarehouseBinReference',
        'shipmentMethod' => 'Spinen\ConnectWise\Models\v2018_6\Finance\ShipmentMethodReference',
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
