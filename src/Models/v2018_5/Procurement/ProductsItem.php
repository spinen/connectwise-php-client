<?php

namespace Spinen\ConnectWise\Models\v2018_5\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProductsItem
 *
 * @property integer $id
 * @property integer $chargeToId
 * @property string $chargeToType
 * @property string $description
 * @property double $sequenceNumber
 * @property double $quantity
 * @property double $price
 * @property double $cost
 * @property double $discount
 * @property string $priceMethod
 * @property string $billableOption
 * @property integer $locationId
 * @property integer $businessUnitId
 * @property string $vendorSku
 * @property boolean $taxableFlag
 * @property boolean $dropshipFlag
 * @property boolean $specialOrderFlag
 * @property boolean $phaseProductFlag
 * @property boolean $cancelledFlag
 * @property double $quantityCancelled
 * @property string $cancelledReason
 * @property string $customerDescription
 * @property string $internalNotes
 * @property boolean $productSuppliedFlag
 * @property integer $subContractorShipToId
 * @property double $subContractorAmountLimit
 * @property integer $forecastDetailId
 * @property integer $cancelledBy
 * @property carbon $cancelledDate
 * @property string $warehouse
 * @property string $warehouseBin
 * @property carbon $purchaseDate
 * @property string $integrationXRef
 * @property double $listPrice
 * @property array $serialNumberIds
 * @property string $productClass
 * @property boolean $needToPurchaseFlag
 * @property boolean $bypassForecastUpdate
 * @property array $customFields
 */
class ProductsItem extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'chargeToId' => 'integer',
        'chargeToType' => 'string',
        'description' => 'string',
        'sequenceNumber' => 'double',
        'quantity' => 'double',
        'price' => 'double',
        'cost' => 'double',
        'discount' => 'double',
        'priceMethod' => 'string',
        'billableOption' => 'string',
        'locationId' => 'integer',
        'businessUnitId' => 'integer',
        'vendorSku' => 'string',
        'taxableFlag' => 'boolean',
        'dropshipFlag' => 'boolean',
        'specialOrderFlag' => 'boolean',
        'phaseProductFlag' => 'boolean',
        'cancelledFlag' => 'boolean',
        'quantityCancelled' => 'double',
        'cancelledReason' => 'string',
        'customerDescription' => 'string',
        'internalNotes' => 'string',
        'productSuppliedFlag' => 'boolean',
        'subContractorShipToId' => 'integer',
        'subContractorAmountLimit' => 'double',
        'forecastDetailId' => 'integer',
        'cancelledBy' => 'integer',
        'cancelledDate' => 'carbon',
        'warehouse' => 'string',
        'warehouseBin' => 'string',
        'purchaseDate' => 'carbon',
        'integrationXRef' => 'string',
        'listPrice' => 'double',
        'serialNumberIds' => 'array',
        'productClass' => 'string',
        'needToPurchaseFlag' => 'boolean',
        'bypassForecastUpdate' => 'boolean',
        'customFields' => 'array',
    ];
}
