<?php

namespace Spinen\ConnectWise\Models\Procurement;

use Spinen\ConnectWise\Support\Model;

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
        'bypassForecastUpdate' => 'boolean',
    ];
}
