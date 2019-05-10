<?php

namespace Spinen\ConnectWise\Models\v2018_5\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProductItem Version v2018_5
 *
 * Model for ProductItem
 *
 * @property Carbon\Carbon $cancelledDate
 * @property Carbon\Carbon $purchaseDate
 * @property Spinen\ConnectWise\Models\v2018_5\Procurement\AgreementReference $agreement
 * @property Spinen\ConnectWise\Models\v2018_5\Procurement\CatalogItemReference $catalogItem
 * @property Spinen\ConnectWise\Models\v2018_5\Procurement\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2018_5\Procurement\CompanyReference $vendor
 * @property Spinen\ConnectWise\Models\v2018_5\Procurement\EntityTypeReference $entityType
 * @property Spinen\ConnectWise\Models\v2018_5\Procurement\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_5\Procurement\OpportunityStatusReference $forecastStatus
 * @property Spinen\ConnectWise\Models\v2018_5\Procurement\ProductRecurring $recurring
 * @property Spinen\ConnectWise\Models\v2018_5\Procurement\SLAReference $sla
 * @property array $customFields
 * @property array $serialNumberIds
 * @property boolean $bypassForecastUpdate
 * @property boolean $cancelledFlag
 * @property boolean $dropshipFlag
 * @property boolean $needToPurchaseFlag
 * @property boolean $phaseProductFlag
 * @property boolean $productSuppliedFlag
 * @property boolean $specialOrderFlag
 * @property boolean $taxableFlag
 * @property float $cost
 * @property float $discount
 * @property float $listPrice
 * @property float $price
 * @property float $quantity
 * @property float $quantityCancelled
 * @property float $sequenceNumber
 * @property float $subContractorAmountLimit
 * @property integer $businessUnitId
 * @property integer $cancelledBy
 * @property integer $chargeToId
 * @property integer $forecastDetailId
 * @property integer $id
 * @property integer $locationId
 * @property integer $subContractorShipToId
 * @property string $billableOption
 * @property string $cancelledReason
 * @property string $chargeToType
 * @property string $customerDescription
 * @property string $description
 * @property string $integrationXRef
 * @property string $internalNotes
 * @property string $priceMethod
 * @property string $productClass
 * @property string $vendorSku
 * @property string $warehouse
 * @property string $warehouseBin
 */
class ProductItem extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Procurement\Metadata',
        'agreement' => 'Spinen\ConnectWise\Models\v2018_5\Procurement\AgreementReference',
        'billableOption' => 'string',
        'businessUnitId' => 'integer',
        'bypassForecastUpdate' => 'boolean',
        'cancelledBy' => 'integer',
        'cancelledDate' => 'Carbon\Carbon',
        'cancelledFlag' => 'boolean',
        'cancelledReason' => 'string',
        'catalogItem' => 'Spinen\ConnectWise\Models\v2018_5\Procurement\CatalogItemReference',
        'chargeToId' => 'integer',
        'chargeToType' => 'string',
        'company' => 'Spinen\ConnectWise\Models\v2018_5\Procurement\CompanyReference',
        'cost' => 'float',
        'customFields' => 'array',
        'customerDescription' => 'string',
        'description' => 'string',
        'discount' => 'float',
        'dropshipFlag' => 'boolean',
        'entityType' => 'Spinen\ConnectWise\Models\v2018_5\Procurement\EntityTypeReference',
        'forecastDetailId' => 'integer',
        'forecastStatus' => 'Spinen\ConnectWise\Models\v2018_5\Procurement\OpportunityStatusReference',
        'id' => 'integer',
        'integrationXRef' => 'string',
        'internalNotes' => 'string',
        'listPrice' => 'float',
        'locationId' => 'integer',
        'needToPurchaseFlag' => 'boolean',
        'phaseProductFlag' => 'boolean',
        'price' => 'float',
        'priceMethod' => 'string',
        'productClass' => 'string',
        'productSuppliedFlag' => 'boolean',
        'purchaseDate' => 'Carbon\Carbon',
        'quantity' => 'float',
        'quantityCancelled' => 'float',
        'recurring' => 'Spinen\ConnectWise\Models\v2018_5\Procurement\ProductRecurring',
        'sequenceNumber' => 'float',
        'serialNumberIds' => 'array',
        'sla' => 'Spinen\ConnectWise\Models\v2018_5\Procurement\SLAReference',
        'specialOrderFlag' => 'boolean',
        'subContractorAmountLimit' => 'float',
        'subContractorShipToId' => 'integer',
        'taxableFlag' => 'boolean',
        'vendor' => 'Spinen\ConnectWise\Models\v2018_5\Procurement\CompanyReference',
        'vendorSku' => 'string',
        'warehouse' => 'string',
        'warehouseBin' => 'string',
    ];
}
