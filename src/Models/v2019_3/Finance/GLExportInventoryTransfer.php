<?php

namespace Spinen\ConnectWise\Models\v2019_3\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportInventoryTransfer Version v2019_3
 * 
 * Model for GLExportInventoryTransfer
 *
 * @property string $id
 * @property string $documentType
 * @property string $documentDate
 * @property string $accountNumber
 * @property string $glClass
 * @property string $glTypeId
 * @property string $description
 * @property string $salesCode
 * @property string $memo
 * @property string $costAcccountNumber
 * @property string $inventoryAccountNumber
 * @property integer $transferId
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\IvItemReference $item
 * @property string $glItemId
 * @property string $salesDescription
 * @property string $itemDescription
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\CurrencyReference $currency
 * @property number $itemPrice
 * @property boolean $taxable
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\UnitOfMeasureReference $unitOfMeasure
 * @property number $quantity
 * @property number $cost
 * @property number $total
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\ProductSubCategoryReference $subCategory
 * @property boolean $serializedFlag
 * @property string $serialNumbers
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\ShipmentMethodReference $shipmentMethod
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\WarehouseBinReference $bin
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\WarehouseReference $warehouse
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\WarehouseBinReference $transferFromBin
 * @property string $transferFromLocationXref
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\WarehouseBinReference $transferToBin
 * @property string $transferToLocationXref
 * @property string $locationXref
 * @property string $priceLevelXref
 * @property string $uomScheduleXref
 * @property string $itemTypeXref
 * @property string $inventoryXref
 * @property string $cogsXref
 * @property string $taxNote
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\TaxCodeReference $taxCode
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\GLExportInventoryTransferOffset $offset
 */
class GLExportInventoryTransfer extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'string',
        'documentType' => 'string',
        'documentDate' => 'string',
        'accountNumber' => 'string',
        'glClass' => 'string',
        'glTypeId' => 'string',
        'description' => 'string',
        'salesCode' => 'string',
        'memo' => 'string',
        'costAcccountNumber' => 'string',
        'inventoryAccountNumber' => 'string',
        'transferId' => 'integer',
        'item' => 'Spinen\ConnectWise\Models\v2019_3\Finance\IvItemReference',
        'glItemId' => 'string',
        'salesDescription' => 'string',
        'itemDescription' => 'string',
        'currency' => 'Spinen\ConnectWise\Models\v2019_3\Finance\CurrencyReference',
        'itemPrice' => 'number',
        'taxable' => 'boolean',
        'unitOfMeasure' => 'Spinen\ConnectWise\Models\v2019_3\Finance\UnitOfMeasureReference',
        'quantity' => 'number',
        'cost' => 'number',
        'total' => 'number',
        'subCategory' => 'Spinen\ConnectWise\Models\v2019_3\Finance\ProductSubCategoryReference',
        'serializedFlag' => 'boolean',
        'serialNumbers' => 'string',
        'shipmentMethod' => 'Spinen\ConnectWise\Models\v2019_3\Finance\ShipmentMethodReference',
        'bin' => 'Spinen\ConnectWise\Models\v2019_3\Finance\WarehouseBinReference',
        'warehouse' => 'Spinen\ConnectWise\Models\v2019_3\Finance\WarehouseReference',
        'transferFromBin' => 'Spinen\ConnectWise\Models\v2019_3\Finance\WarehouseBinReference',
        'transferFromLocationXref' => 'string',
        'transferToBin' => 'Spinen\ConnectWise\Models\v2019_3\Finance\WarehouseBinReference',
        'transferToLocationXref' => 'string',
        'locationXref' => 'string',
        'priceLevelXref' => 'string',
        'uomScheduleXref' => 'string',
        'itemTypeXref' => 'string',
        'inventoryXref' => 'string',
        'cogsXref' => 'string',
        'taxNote' => 'string',
        'taxCode' => 'Spinen\ConnectWise\Models\v2019_3\Finance\TaxCodeReference',
        'offset' => 'Spinen\ConnectWise\Models\v2019_3\Finance\GLExportInventoryTransferOffset',
    ];
}