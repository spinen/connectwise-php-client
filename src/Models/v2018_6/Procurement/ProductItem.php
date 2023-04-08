<?php

namespace Spinen\ConnectWise\Models\v2018_6\Procurement;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ProductItem Version v2018_6
 *
 * Model for ProductItem
 *
 * @property AgreementReference $agreement
 * @property Carbon $cancelledDate
 * @property Carbon $purchaseDate
 * @property CatalogItemReference $catalogItem
 * @property CompanyReference $company
 * @property CompanyReference $vendor
 * @property EntityTypeReference $entityType
 * @property InvoiceReference $invoice
 * @property Metadata $_info
 * @property OpportunityReference $opportunity
 * @property OpportunityStatusReference $forecastStatus
 * @property ProductRecurring $recurring
 * @property ProjectReference $project
 * @property SLAReference $sla
 * @property SalesOrderReference $salesOrder
 * @property TicketReference $ticket
 * @property array $customFields
 * @property array $serialNumberIds
 * @property bool $bypassForecastUpdate
 * @property bool $cancelledFlag
 * @property bool $dropshipFlag
 * @property bool $minimumStockFlag
 * @property bool $needToPurchaseFlag
 * @property bool $phaseProductFlag
 * @property bool $productSuppliedFlag
 * @property bool $specialOrderFlag
 * @property bool $taxableFlag
 * @property float $cost
 * @property float $discount
 * @property float $listPrice
 * @property float $price
 * @property float $quantity
 * @property float $quantityCancelled
 * @property float $sequenceNumber
 * @property float $subContractorAmountLimit
 * @property int $businessUnitId
 * @property int $cancelledBy
 * @property int $forecastDetailId
 * @property int $id
 * @property int $locationId
 * @property int $subContractorShipToId
 * @property string $billableOption
 * @property string $cancelledReason
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
        '_info' => Metadata::class,
        'agreement' => AgreementReference::class,
        'billableOption' => 'string',
        'businessUnitId' => 'integer',
        'bypassForecastUpdate' => 'boolean',
        'cancelledBy' => 'integer',
        'cancelledDate' => Carbon::class,
        'cancelledFlag' => 'boolean',
        'cancelledReason' => 'string',
        'catalogItem' => CatalogItemReference::class,
        'company' => CompanyReference::class,
        'cost' => 'float',
        'customFields' => 'array',
        'customerDescription' => 'string',
        'description' => 'string',
        'discount' => 'float',
        'dropshipFlag' => 'boolean',
        'entityType' => EntityTypeReference::class,
        'forecastDetailId' => 'integer',
        'forecastStatus' => OpportunityStatusReference::class,
        'id' => 'integer',
        'integrationXRef' => 'string',
        'internalNotes' => 'string',
        'invoice' => InvoiceReference::class,
        'listPrice' => 'float',
        'locationId' => 'integer',
        'minimumStockFlag' => 'boolean',
        'needToPurchaseFlag' => 'boolean',
        'opportunity' => OpportunityReference::class,
        'phaseProductFlag' => 'boolean',
        'price' => 'float',
        'priceMethod' => 'string',
        'productClass' => 'string',
        'productSuppliedFlag' => 'boolean',
        'project' => ProjectReference::class,
        'purchaseDate' => Carbon::class,
        'quantity' => 'float',
        'quantityCancelled' => 'float',
        'recurring' => ProductRecurring::class,
        'salesOrder' => SalesOrderReference::class,
        'sequenceNumber' => 'float',
        'serialNumberIds' => 'array',
        'sla' => SLAReference::class,
        'specialOrderFlag' => 'boolean',
        'subContractorAmountLimit' => 'float',
        'subContractorShipToId' => 'integer',
        'taxableFlag' => 'boolean',
        'ticket' => TicketReference::class,
        'vendor' => CompanyReference::class,
        'vendorSku' => 'string',
        'warehouse' => 'string',
        'warehouseBin' => 'string',
    ];
}
