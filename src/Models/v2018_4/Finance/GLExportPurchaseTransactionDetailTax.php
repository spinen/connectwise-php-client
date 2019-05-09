<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportPurchaseTransactionDetailTax Version v2018_4
 * 
 * Model for GLExportPurchaseTransactionDetailTax
 *
 * @property integer $id
 * @property string $documentDate
 * @property string $accountNumber
 * @property string $glClass
 * @property number $cost
 * @property string $salesCode
 * @property string $glTypeId
 * @property string $glItemId
 * @property string $memo
 * @property string $vendorNumber
 * @property string $vendorAccountNumber
 * @property string $costAccountNumber
 * @property string $inventoryAccountNumber
 * @property string $itemTypeXref
 * @property string $inventoryXref
 * @property string $cogsXref
 * @property string $uomScheduleXref
 * @property string $priceLevelXref
 * @property string $locationXref
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\IvItemReference $item
 * @property boolean $taxableFlag
 * @property string $salesDescription
 * @property string $itemDescription
 * @property number $itemPrice
 * @property number $itemCost
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\UnitOfMeasureReference $unitOfMeasure
 * @property number $quantity
 * @property number $total
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\CurrencyReference $currency
 * @property boolean $serializedFlag
 * @property string $serialNumbers
 * @property boolean $dropShippedFlag
 * @property integer $lineNumber
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\SiteReference $warehouseSite
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\WarehouseBinReference $warehouseBin
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\ShipmentMethodReference $shipmentMethod
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\ProductSubCategoryReference $subCategory
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\TaxCodeReference $taxCode
 * @property number $taxRate
 * @property number $taxRatePercent
 * @property string $taxAgencyXref
 * @property string $taxNote
 * @property string $purchaseHeaderTaxGroup
 */
class GLExportPurchaseTransactionDetailTax extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'documentDate' => 'string',
        'accountNumber' => 'string',
        'glClass' => 'string',
        'cost' => 'number',
        'salesCode' => 'string',
        'glTypeId' => 'string',
        'glItemId' => 'string',
        'memo' => 'string',
        'vendorNumber' => 'string',
        'vendorAccountNumber' => 'string',
        'costAccountNumber' => 'string',
        'inventoryAccountNumber' => 'string',
        'itemTypeXref' => 'string',
        'inventoryXref' => 'string',
        'cogsXref' => 'string',
        'uomScheduleXref' => 'string',
        'priceLevelXref' => 'string',
        'locationXref' => 'string',
        'item' => 'Spinen\ConnectWise\Models\v2018_4\Finance\IvItemReference',
        'taxableFlag' => 'boolean',
        'salesDescription' => 'string',
        'itemDescription' => 'string',
        'itemPrice' => 'number',
        'itemCost' => 'number',
        'unitOfMeasure' => 'Spinen\ConnectWise\Models\v2018_4\Finance\UnitOfMeasureReference',
        'quantity' => 'number',
        'total' => 'number',
        'currency' => 'Spinen\ConnectWise\Models\v2018_4\Finance\CurrencyReference',
        'serializedFlag' => 'boolean',
        'serialNumbers' => 'string',
        'dropShippedFlag' => 'boolean',
        'lineNumber' => 'integer',
        'warehouseSite' => 'Spinen\ConnectWise\Models\v2018_4\Finance\SiteReference',
        'warehouseBin' => 'Spinen\ConnectWise\Models\v2018_4\Finance\WarehouseBinReference',
        'shipmentMethod' => 'Spinen\ConnectWise\Models\v2018_4\Finance\ShipmentMethodReference',
        'subCategory' => 'Spinen\ConnectWise\Models\v2018_4\Finance\ProductSubCategoryReference',
        'taxCode' => 'Spinen\ConnectWise\Models\v2018_4\Finance\TaxCodeReference',
        'taxRate' => 'number',
        'taxRatePercent' => 'number',
        'taxAgencyXref' => 'string',
        'taxNote' => 'string',
        'purchaseHeaderTaxGroup' => 'string',
    ];
}
