<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportInventoryTransfer Version v2018_4
 *
 * Model for GLExportInventoryTransfer
 *
 * @property Carbon\Carbon $documentDate
 * @property CurrencyReference $currency
 * @property GLExportInventoryTransferOffset $offset
 * @property IvItemReference $item
 * @property ProductSubCategoryReference $subCategory
 * @property ShipmentMethodReference $shipmentMethod
 * @property TaxCodeReference $taxCode
 * @property UnitOfMeasureReference $unitOfMeasure
 * @property WarehouseBinReference $bin
 * @property WarehouseBinReference $transferFromBin
 * @property WarehouseBinReference $transferToBin
 * @property WarehouseReference $warehouse
 * @property boolean $serializedFlag
 * @property boolean $taxable
 * @property float $cost
 * @property float $itemPrice
 * @property float $quantity
 * @property float $total
 * @property integer $transferId
 * @property string $accountNumber
 * @property string $cogsXref
 * @property string $costAcccountNumber
 * @property string $description
 * @property string $documentType
 * @property string $glClass
 * @property string $glItemId
 * @property string $glTypeId
 * @property string $id
 * @property string $inventoryAccountNumber
 * @property string $inventoryXref
 * @property string $itemDescription
 * @property string $itemTypeXref
 * @property string $locationXref
 * @property string $memo
 * @property string $priceLevelXref
 * @property string $salesCode
 * @property string $salesDescription
 * @property string $serialNumbers
 * @property string $taxNote
 * @property string $transferFromLocationXref
 * @property string $transferToLocationXref
 * @property string $uomScheduleXref
 */
class GLExportInventoryTransfer extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'accountNumber' => 'string',
        'bin' => WarehouseBinReference::class,
        'cogsXref' => 'string',
        'cost' => 'float',
        'costAcccountNumber' => 'string',
        'currency' => CurrencyReference::class,
        'description' => 'string',
        'documentDate' => Carbon\Carbon::class,
        'documentType' => 'string',
        'glClass' => 'string',
        'glItemId' => 'string',
        'glTypeId' => 'string',
        'id' => 'string',
        'inventoryAccountNumber' => 'string',
        'inventoryXref' => 'string',
        'item' => IvItemReference::class,
        'itemDescription' => 'string',
        'itemPrice' => 'float',
        'itemTypeXref' => 'string',
        'locationXref' => 'string',
        'memo' => 'string',
        'offset' => GLExportInventoryTransferOffset::class,
        'priceLevelXref' => 'string',
        'quantity' => 'float',
        'salesCode' => 'string',
        'salesDescription' => 'string',
        'serialNumbers' => 'string',
        'serializedFlag' => 'boolean',
        'shipmentMethod' => ShipmentMethodReference::class,
        'subCategory' => ProductSubCategoryReference::class,
        'taxCode' => TaxCodeReference::class,
        'taxNote' => 'string',
        'taxable' => 'boolean',
        'total' => 'float',
        'transferFromBin' => WarehouseBinReference::class,
        'transferFromLocationXref' => 'string',
        'transferId' => 'integer',
        'transferToBin' => WarehouseBinReference::class,
        'transferToLocationXref' => 'string',
        'unitOfMeasure' => UnitOfMeasureReference::class,
        'uomScheduleXref' => 'string',
        'warehouse' => WarehouseReference::class,
    ];
}
