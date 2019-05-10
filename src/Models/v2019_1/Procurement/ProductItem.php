<?php

namespace Spinen\ConnectWise\Models\v2019_1\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProductItem Version v2019_1
 *
 * Model for ProductItem
 *
 * @property Carbon\Carbon $cancelledDate
 * @property Carbon\Carbon $purchaseDate
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\AgreementReference $agreement
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\CatalogItemReference $catalogItem
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\CompanyReference $vendor
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\EntityTypeReference $entityType
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\InvoiceReference $invoice
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\OpportunityReference $opportunity
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\OpportunityStatusReference $forecastStatus
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\ProductRecurring $recurring
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\ProjectReference $project
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\SLAReference $sla
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\SalesOrderReference $salesOrder
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\TicketReference $ticket
 * @property array $customFields
 * @property array $serialNumberIds
 * @property boolean $addComponentsFlag
 * @property boolean $bypassForecastUpdate
 * @property boolean $cancelledFlag
 * @property boolean $dropshipFlag
 * @property boolean $minimumStockFlag
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
 * @property integer $forecastDetailId
 * @property integer $id
 * @property integer $locationId
 * @property integer $needToOrderQuantity
 * @property integer $subContractorShipToId
 * @property integer $warehouseBinId
 * @property integer $warehouseId
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\Metadata',
        'addComponentsFlag' => 'boolean',
        'agreement' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\AgreementReference',
        'billableOption' => 'string',
        'businessUnitId' => 'integer',
        'bypassForecastUpdate' => 'boolean',
        'cancelledBy' => 'integer',
        'cancelledDate' => 'Carbon\Carbon',
        'cancelledFlag' => 'boolean',
        'cancelledReason' => 'string',
        'catalogItem' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\CatalogItemReference',
        'company' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\CompanyReference',
        'cost' => 'float',
        'customFields' => 'array',
        'customerDescription' => 'string',
        'description' => 'string',
        'discount' => 'float',
        'dropshipFlag' => 'boolean',
        'entityType' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\EntityTypeReference',
        'forecastDetailId' => 'integer',
        'forecastStatus' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\OpportunityStatusReference',
        'id' => 'integer',
        'integrationXRef' => 'string',
        'internalNotes' => 'string',
        'invoice' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\InvoiceReference',
        'listPrice' => 'float',
        'locationId' => 'integer',
        'minimumStockFlag' => 'boolean',
        'needToOrderQuantity' => 'integer',
        'needToPurchaseFlag' => 'boolean',
        'opportunity' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\OpportunityReference',
        'phaseProductFlag' => 'boolean',
        'price' => 'float',
        'priceMethod' => 'string',
        'productClass' => 'string',
        'productSuppliedFlag' => 'boolean',
        'project' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\ProjectReference',
        'purchaseDate' => 'Carbon\Carbon',
        'quantity' => 'float',
        'quantityCancelled' => 'float',
        'recurring' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\ProductRecurring',
        'salesOrder' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\SalesOrderReference',
        'sequenceNumber' => 'float',
        'serialNumberIds' => 'array',
        'sla' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\SLAReference',
        'specialOrderFlag' => 'boolean',
        'subContractorAmountLimit' => 'float',
        'subContractorShipToId' => 'integer',
        'taxableFlag' => 'boolean',
        'ticket' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\TicketReference',
        'vendor' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\CompanyReference',
        'vendorSku' => 'string',
        'warehouse' => 'string',
        'warehouseBin' => 'string',
        'warehouseBinId' => 'integer',
        'warehouseId' => 'integer',
    ];
}
