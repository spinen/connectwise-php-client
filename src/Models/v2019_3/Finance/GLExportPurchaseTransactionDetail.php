<?php

namespace Spinen\ConnectWise\Models\v2019_3\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportPurchaseTransactionDetail Version v2019_3
 * 
 * Model for GLExportPurchaseTransactionDetail
 *
 * @property integer $id
 * @property Carbon\Carbon $documentDate
 * @property string $glClass
 * @property string $glTypeId
 * @property string $glItemId
 * @property string $salesCode
 * @property string $description
 * @property float $cost
 * @property string $memo
 * @property string $taxNote
 * @property string $vendorNumber
 * @property string $accountNumber
 * @property string $costAccountNumber
 * @property string $inventoryAccountNumber
 * @property string $vendorAccountNumber
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\IvItemReference $item
 * @property string $itemDescription
 * @property string $salesDescription
 * @property boolean $taxable
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
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\WarehouseBinReference $warehouseBin
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\SiteReference $warehouseSite
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\ProductSubCategoryReference $subCategory
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\ShipmentMethodReference $shipmentMethod
 * @property string $itemTypeXref
 * @property string $inventoryXref
 * @property string $cogsXref
 * @property string $uomScheduleXref
 * @property string $priceLevelXref
 * @property string $locationXref
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\TaxCodeReference $taxCode
 * @property string $purchaseHeaderTaxGroup
 * @property string $taxCodeXref
 * @property float $taxRate
 * @property string $taxAgencyXref
 */
class GLExportPurchaseTransactionDetail extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'documentDate' => 'Carbon\Carbon',
        'glClass' => 'string',
        'glTypeId' => 'string',
        'glItemId' => 'string',
        'salesCode' => 'string',
        'description' => 'string',
        'cost' => 'float',
        'memo' => 'string',
        'taxNote' => 'string',
        'vendorNumber' => 'string',
        'accountNumber' => 'string',
        'costAccountNumber' => 'string',
        'inventoryAccountNumber' => 'string',
        'vendorAccountNumber' => 'string',
        'item' => 'Spinen\ConnectWise\Models\v2019_3\Finance\IvItemReference',
        'itemDescription' => 'string',
        'salesDescription' => 'string',
        'taxable' => 'boolean',
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
        'warehouseBin' => 'Spinen\ConnectWise\Models\v2019_3\Finance\WarehouseBinReference',
        'warehouseSite' => 'Spinen\ConnectWise\Models\v2019_3\Finance\SiteReference',
        'subCategory' => 'Spinen\ConnectWise\Models\v2019_3\Finance\ProductSubCategoryReference',
        'shipmentMethod' => 'Spinen\ConnectWise\Models\v2019_3\Finance\ShipmentMethodReference',
        'itemTypeXref' => 'string',
        'inventoryXref' => 'string',
        'cogsXref' => 'string',
        'uomScheduleXref' => 'string',
        'priceLevelXref' => 'string',
        'locationXref' => 'string',
        'taxCode' => 'Spinen\ConnectWise\Models\v2019_3\Finance\TaxCodeReference',
        'purchaseHeaderTaxGroup' => 'string',
        'taxCodeXref' => 'string',
        'taxRate' => 'float',
        'taxAgencyXref' => 'string',
    ];
}
