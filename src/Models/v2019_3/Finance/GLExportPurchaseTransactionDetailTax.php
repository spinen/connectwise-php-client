<?php

namespace Spinen\ConnectWise\Models\v2019_3\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportPurchaseTransactionDetailTax Version v2019_3
 *
 * Model for GLExportPurchaseTransactionDetailTax
 *
 * @property integer $id
 * @property Carbon\Carbon $documentDate
 * @property string $accountNumber
 * @property string $glClass
 * @property float $cost
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
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\IvItemReference $item
 * @property boolean $taxableFlag
 * @property string $salesDescription
 * @property string $itemDescription
 * @property float $itemPrice
 * @property float $itemCost
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\UnitOfMeasureReference $unitOfMeasure
 * @property float $quantity
 * @property float $total
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\CurrencyReference $currency
 * @property boolean $serializedFlag
 * @property string $serialNumbers
 * @property boolean $dropShippedFlag
 * @property integer $lineNumber
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\SiteReference $warehouseSite
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\WarehouseBinReference $warehouseBin
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\ShipmentMethodReference $shipmentMethod
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\ProductSubCategoryReference $subCategory
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\TaxCodeReference $taxCode
 * @property float $taxRate
 * @property float $taxRatePercent
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
        'documentDate' => 'Carbon\Carbon',
        'accountNumber' => 'string',
        'glClass' => 'string',
        'cost' => 'float',
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
        'item' => 'Spinen\ConnectWise\Models\v2019_3\Finance\IvItemReference',
        'taxableFlag' => 'boolean',
        'salesDescription' => 'string',
        'itemDescription' => 'string',
        'itemPrice' => 'float',
        'itemCost' => 'float',
        'unitOfMeasure' => 'Spinen\ConnectWise\Models\v2019_3\Finance\UnitOfMeasureReference',
        'quantity' => 'float',
        'total' => 'float',
        'currency' => 'Spinen\ConnectWise\Models\v2019_3\Finance\CurrencyReference',
        'serializedFlag' => 'boolean',
        'serialNumbers' => 'string',
        'dropShippedFlag' => 'boolean',
        'lineNumber' => 'integer',
        'warehouseSite' => 'Spinen\ConnectWise\Models\v2019_3\Finance\SiteReference',
        'warehouseBin' => 'Spinen\ConnectWise\Models\v2019_3\Finance\WarehouseBinReference',
        'shipmentMethod' => 'Spinen\ConnectWise\Models\v2019_3\Finance\ShipmentMethodReference',
        'subCategory' => 'Spinen\ConnectWise\Models\v2019_3\Finance\ProductSubCategoryReference',
        'taxCode' => 'Spinen\ConnectWise\Models\v2019_3\Finance\TaxCodeReference',
        'taxRate' => 'float',
        'taxRatePercent' => 'float',
        'taxAgencyXref' => 'string',
        'taxNote' => 'string',
        'purchaseHeaderTaxGroup' => 'string',
    ];
}
