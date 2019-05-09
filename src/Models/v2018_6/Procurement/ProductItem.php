<?php

namespace Spinen\ConnectWise\Models\v2018_6\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProductItem Version v2018_6
 * 
 * Model for ProductItem
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\CatalogItemReference $catalogItem
 * @property string $description
 * @property number $sequenceNumber
 * @property number $quantity
 * @property number $price
 * @property number $cost
 * @property number $discount
 * @property string $priceMethod
 * @property string $billableOption
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\AgreementReference $agreement
 * @property integer $locationId
 * @property integer $businessUnitId
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\CompanyReference $vendor
 * @property string $vendorSku
 * @property boolean $taxableFlag
 * @property boolean $dropshipFlag
 * @property boolean $specialOrderFlag
 * @property boolean $phaseProductFlag
 * @property boolean $cancelledFlag
 * @property number $quantityCancelled
 * @property string $cancelledReason
 * @property string $customerDescription
 * @property string $internalNotes
 * @property boolean $productSuppliedFlag
 * @property integer $subContractorShipToId
 * @property number $subContractorAmountLimit
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\ProductRecurring $recurring
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\SLAReference $sla
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\EntityTypeReference $entityType
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\TicketReference $ticket
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\ProjectReference $project
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\SalesOrderReference $salesOrder
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\OpportunityReference $opportunity
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\InvoiceReference $invoice
 * @property integer $forecastDetailId
 * @property integer $cancelledBy
 * @property string $cancelledDate
 * @property string $warehouse
 * @property string $warehouseBin
 * @property string $purchaseDate
 * @property string $integrationXRef
 * @property number $listPrice
 * @property array $serialNumberIds
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\OpportunityStatusReference $forecastStatus
 * @property string $productClass
 * @property boolean $needToPurchaseFlag
 * @property boolean $minimumStockFlag
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\Metadata $_info
 * @property boolean $bypassForecastUpdate
 * @property array $customFields
 */
class ProductItem extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'catalogItem' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\CatalogItemReference',
        'description' => 'string',
        'sequenceNumber' => 'number',
        'quantity' => 'number',
        'price' => 'number',
        'cost' => 'number',
        'discount' => 'number',
        'priceMethod' => 'string',
        'billableOption' => 'string',
        'agreement' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\AgreementReference',
        'locationId' => 'integer',
        'businessUnitId' => 'integer',
        'vendor' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\CompanyReference',
        'vendorSku' => 'string',
        'taxableFlag' => 'boolean',
        'dropshipFlag' => 'boolean',
        'specialOrderFlag' => 'boolean',
        'phaseProductFlag' => 'boolean',
        'cancelledFlag' => 'boolean',
        'quantityCancelled' => 'number',
        'cancelledReason' => 'string',
        'customerDescription' => 'string',
        'internalNotes' => 'string',
        'productSuppliedFlag' => 'boolean',
        'subContractorShipToId' => 'integer',
        'subContractorAmountLimit' => 'number',
        'recurring' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\ProductRecurring',
        'sla' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\SLAReference',
        'entityType' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\EntityTypeReference',
        'ticket' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\TicketReference',
        'project' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\ProjectReference',
        'salesOrder' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\SalesOrderReference',
        'opportunity' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\OpportunityReference',
        'invoice' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\InvoiceReference',
        'forecastDetailId' => 'integer',
        'cancelledBy' => 'integer',
        'cancelledDate' => 'string',
        'warehouse' => 'string',
        'warehouseBin' => 'string',
        'purchaseDate' => 'string',
        'integrationXRef' => 'string',
        'listPrice' => 'number',
        'serialNumberIds' => 'array',
        'company' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\CompanyReference',
        'forecastStatus' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\OpportunityStatusReference',
        'productClass' => 'string',
        'needToPurchaseFlag' => 'boolean',
        'minimumStockFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\Metadata',
        'bypassForecastUpdate' => 'boolean',
        'customFields' => 'array',
    ];
}
