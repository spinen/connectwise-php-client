<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportInventoryTransfer Version v2018_4
 *
 * Model for GLExportInventoryTransfer
 *
 * @property Carbon\Carbon $documentDate
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\GLExportInventoryTransferOffset $offset
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\IvItemReference $item
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\ProductSubCategoryReference $subCategory
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\ShipmentMethodReference $shipmentMethod
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\TaxCodeReference $taxCode
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\UnitOfMeasureReference $unitOfMeasure
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\WarehouseBinReference $bin
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\WarehouseBinReference $transferFromBin
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\WarehouseBinReference $transferToBin
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\WarehouseReference $warehouse
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
        'bin' => 'Spinen\ConnectWise\Models\v2018_4\Finance\WarehouseBinReference',
        'cogsXref' => 'string',
        'cost' => 'float',
        'costAcccountNumber' => 'string',
        'currency' => 'Spinen\ConnectWise\Models\v2018_4\Finance\CurrencyReference',
        'description' => 'string',
        'documentDate' => 'Carbon\Carbon',
        'documentType' => 'string',
        'glClass' => 'string',
        'glItemId' => 'string',
        'glTypeId' => 'string',
        'id' => 'string',
        'inventoryAccountNumber' => 'string',
        'inventoryXref' => 'string',
        'item' => 'Spinen\ConnectWise\Models\v2018_4\Finance\IvItemReference',
        'itemDescription' => 'string',
        'itemPrice' => 'float',
        'itemTypeXref' => 'string',
        'locationXref' => 'string',
        'memo' => 'string',
        'offset' => 'Spinen\ConnectWise\Models\v2018_4\Finance\GLExportInventoryTransferOffset',
        'priceLevelXref' => 'string',
        'quantity' => 'float',
        'salesCode' => 'string',
        'salesDescription' => 'string',
        'serialNumbers' => 'string',
        'serializedFlag' => 'boolean',
        'shipmentMethod' => 'Spinen\ConnectWise\Models\v2018_4\Finance\ShipmentMethodReference',
        'subCategory' => 'Spinen\ConnectWise\Models\v2018_4\Finance\ProductSubCategoryReference',
        'taxCode' => 'Spinen\ConnectWise\Models\v2018_4\Finance\TaxCodeReference',
        'taxNote' => 'string',
        'taxable' => 'boolean',
        'total' => 'float',
        'transferFromBin' => 'Spinen\ConnectWise\Models\v2018_4\Finance\WarehouseBinReference',
        'transferFromLocationXref' => 'string',
        'transferId' => 'integer',
        'transferToBin' => 'Spinen\ConnectWise\Models\v2018_4\Finance\WarehouseBinReference',
        'transferToLocationXref' => 'string',
        'unitOfMeasure' => 'Spinen\ConnectWise\Models\v2018_4\Finance\UnitOfMeasureReference',
        'uomScheduleXref' => 'string',
        'warehouse' => 'Spinen\ConnectWise\Models\v2018_4\Finance\WarehouseReference',
    ];
}
