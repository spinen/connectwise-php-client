<?php

namespace Spinen\ConnectWise\Models\v2019_4\Finance;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportPurchaseTransactionDetail Version v2019_4
 *
 * Model for GLExportPurchaseTransactionDetail
 *
 * @property Carbon $documentDate
 * @property CurrencyReference $currency
 * @property IvItemReference $item
 * @property ProductSubCategoryReference $subCategory
 * @property ShipmentMethodReference $shipmentMethod
 * @property SiteReference $warehouseSite
 * @property TaxCodeReference $taxCode
 * @property UnitOfMeasureReference $unitOfMeasure
 * @property WarehouseBinReference $warehouseBin
 * @property boolean $dropShippedFlag
 * @property boolean $serializedFlag
 * @property boolean $taxable
 * @property float $cost
 * @property float $itemCost
 * @property float $itemPrice
 * @property float $quantity
 * @property float $taxRate
 * @property float $total
 * @property integer $id
 * @property integer $lineNumber
 * @property string $accountNumber
 * @property string $cogsXref
 * @property string $costAccountNumber
 * @property string $description
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
 * @property string $taxCodeXref
 * @property string $taxNote
 * @property string $uomScheduleXref
 * @property string $vendorAccountNumber
 * @property string $vendorNumber
 */
class GLExportPurchaseTransactionDetail extends Model
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
        'currency' => CurrencyReference::class,
        'description' => 'string',
        'documentDate' => Carbon::class,
        'dropShippedFlag' => 'boolean',
        'glClass' => 'string',
        'glItemId' => 'string',
        'glTypeId' => 'string',
        'id' => 'integer',
        'inventoryAccountNumber' => 'string',
        'inventoryXref' => 'string',
        'item' => IvItemReference::class,
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
        'shipmentMethod' => ShipmentMethodReference::class,
        'subCategory' => ProductSubCategoryReference::class,
        'taxAgencyXref' => 'string',
        'taxCode' => TaxCodeReference::class,
        'taxCodeXref' => 'string',
        'taxNote' => 'string',
        'taxRate' => 'float',
        'taxable' => 'boolean',
        'total' => 'float',
        'unitOfMeasure' => UnitOfMeasureReference::class,
        'uomScheduleXref' => 'string',
        'vendorAccountNumber' => 'string',
        'vendorNumber' => 'string',
        'warehouseBin' => WarehouseBinReference::class,
        'warehouseSite' => SiteReference::class
    ];
}
