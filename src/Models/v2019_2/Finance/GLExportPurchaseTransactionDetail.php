<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportPurchaseTransactionDetail Version v2019_2
 *
 * Model for GLExportPurchaseTransactionDetail
 *
 * @property Carbon\Carbon $documentDate
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\IvItemReference $item
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\ProductSubCategoryReference $subCategory
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\ShipmentMethodReference $shipmentMethod
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\SiteReference $warehouseSite
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\TaxCodeReference $taxCode
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\UnitOfMeasureReference $unitOfMeasure
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\WarehouseBinReference $warehouseBin
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
        'currency' => 'Spinen\ConnectWise\Models\v2019_2\Finance\CurrencyReference',
        'description' => 'string',
        'documentDate' => 'Carbon\Carbon',
        'dropShippedFlag' => 'boolean',
        'glClass' => 'string',
        'glItemId' => 'string',
        'glTypeId' => 'string',
        'id' => 'integer',
        'inventoryAccountNumber' => 'string',
        'inventoryXref' => 'string',
        'item' => 'Spinen\ConnectWise\Models\v2019_2\Finance\IvItemReference',
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
        'shipmentMethod' => 'Spinen\ConnectWise\Models\v2019_2\Finance\ShipmentMethodReference',
        'subCategory' => 'Spinen\ConnectWise\Models\v2019_2\Finance\ProductSubCategoryReference',
        'taxAgencyXref' => 'string',
        'taxCode' => 'Spinen\ConnectWise\Models\v2019_2\Finance\TaxCodeReference',
        'taxCodeXref' => 'string',
        'taxNote' => 'string',
        'taxRate' => 'float',
        'taxable' => 'boolean',
        'total' => 'float',
        'unitOfMeasure' => 'Spinen\ConnectWise\Models\v2019_2\Finance\UnitOfMeasureReference',
        'uomScheduleXref' => 'string',
        'vendorAccountNumber' => 'string',
        'vendorNumber' => 'string',
        'warehouseBin' => 'Spinen\ConnectWise\Models\v2019_2\Finance\WarehouseBinReference',
        'warehouseSite' => 'Spinen\ConnectWise\Models\v2019_2\Finance\SiteReference',
    ];
}
