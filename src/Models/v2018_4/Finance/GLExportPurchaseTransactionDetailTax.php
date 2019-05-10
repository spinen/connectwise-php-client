<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportPurchaseTransactionDetailTax Version v2018_4
 *
 * Model for GLExportPurchaseTransactionDetailTax
 *
 * @property Carbon\Carbon $documentDate
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\IvItemReference $item
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\ProductSubCategoryReference $subCategory
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\ShipmentMethodReference $shipmentMethod
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\SiteReference $warehouseSite
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\TaxCodeReference $taxCode
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\UnitOfMeasureReference $unitOfMeasure
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\WarehouseBinReference $warehouseBin
 * @property boolean $dropShippedFlag
 * @property boolean $serializedFlag
 * @property boolean $taxableFlag
 * @property float $cost
 * @property float $itemCost
 * @property float $itemPrice
 * @property float $quantity
 * @property float $taxRate
 * @property float $taxRatePercent
 * @property float $total
 * @property integer $id
 * @property integer $lineNumber
 * @property string $accountNumber
 * @property string $cogsXref
 * @property string $costAccountNumber
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
 * @property string $purchaseHeaderTaxGroup
 * @property string $salesCode
 * @property string $salesDescription
 * @property string $serialNumbers
 * @property string $taxAgencyXref
 * @property string $taxNote
 * @property string $uomScheduleXref
 * @property string $vendorAccountNumber
 * @property string $vendorNumber
 */
class GLExportPurchaseTransactionDetailTax extends Model
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
        'currency' => 'Spinen\ConnectWise\Models\v2018_4\Finance\CurrencyReference',
        'documentDate' => 'Carbon\Carbon',
        'dropShippedFlag' => 'boolean',
        'glClass' => 'string',
        'glItemId' => 'string',
        'glTypeId' => 'string',
        'id' => 'integer',
        'inventoryAccountNumber' => 'string',
        'inventoryXref' => 'string',
        'item' => 'Spinen\ConnectWise\Models\v2018_4\Finance\IvItemReference',
        'itemCost' => 'float',
        'itemDescription' => 'string',
        'itemPrice' => 'float',
        'itemTypeXref' => 'string',
        'lineNumber' => 'integer',
        'locationXref' => 'string',
        'memo' => 'string',
        'priceLevelXref' => 'string',
        'purchaseHeaderTaxGroup' => 'string',
        'quantity' => 'float',
        'salesCode' => 'string',
        'salesDescription' => 'string',
        'serialNumbers' => 'string',
        'serializedFlag' => 'boolean',
        'shipmentMethod' => 'Spinen\ConnectWise\Models\v2018_4\Finance\ShipmentMethodReference',
        'subCategory' => 'Spinen\ConnectWise\Models\v2018_4\Finance\ProductSubCategoryReference',
        'taxAgencyXref' => 'string',
        'taxCode' => 'Spinen\ConnectWise\Models\v2018_4\Finance\TaxCodeReference',
        'taxNote' => 'string',
        'taxRate' => 'float',
        'taxRatePercent' => 'float',
        'taxableFlag' => 'boolean',
        'total' => 'float',
        'unitOfMeasure' => 'Spinen\ConnectWise\Models\v2018_4\Finance\UnitOfMeasureReference',
        'uomScheduleXref' => 'string',
        'vendorAccountNumber' => 'string',
        'vendorNumber' => 'string',
        'warehouseBin' => 'Spinen\ConnectWise\Models\v2018_4\Finance\WarehouseBinReference',
        'warehouseSite' => 'Spinen\ConnectWise\Models\v2018_4\Finance\SiteReference',
    ];
}
