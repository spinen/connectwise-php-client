<?php

namespace Spinen\ConnectWise\Models\v2018_6\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CatalogItem Version v2018_6
 * 
 * Model for CatalogItem
 *
 * @property integer $id
 * @property string $identifier
 * @property string $description
 * @property boolean $inactiveFlag
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\ProductSubCategoryReference $subcategory
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\ProductTypeReference $type
 * @property string $productClass
 * @property boolean $serializedFlag
 * @property boolean $serializedCostFlag
 * @property boolean $phaseProductFlag
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\UnitOfMeasureReference $unitOfMeasure
 * @property integer $minStockLevel
 * @property float $price
 * @property float $cost
 * @property string $priceAttribute
 * @property boolean $taxableFlag
 * @property string $customerDescription
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\ManufacturerReference $manufacturer
 * @property string $manufacturerPartNumber
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\CompanyReference $vendor
 * @property string $vendorSku
 * @property string $notes
 * @property string $integrationXRef
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\SLAReference $sla
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\EntityTypeReference $entityType
 * @property boolean $recurringFlag
 * @property float $recurringRevenue
 * @property float $recurringCost
 * @property boolean $recurringOneTimeFlag
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\BillingCycleReference $recurringBillCycle
 * @property string $recurringCycleType
 * @property string $dateEntered
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\ProductCategoryReference $category
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\Metadata $_info
 * @property array $customFields
 */
class CatalogItem extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'identifier' => 'string',
        'description' => 'string',
        'inactiveFlag' => 'boolean',
        'subcategory' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\ProductSubCategoryReference',
        'type' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\ProductTypeReference',
        'productClass' => 'string',
        'serializedFlag' => 'boolean',
        'serializedCostFlag' => 'boolean',
        'phaseProductFlag' => 'boolean',
        'unitOfMeasure' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\UnitOfMeasureReference',
        'minStockLevel' => 'integer',
        'price' => 'float',
        'cost' => 'float',
        'priceAttribute' => 'string',
        'taxableFlag' => 'boolean',
        'customerDescription' => 'string',
        'manufacturer' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\ManufacturerReference',
        'manufacturerPartNumber' => 'string',
        'vendor' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\CompanyReference',
        'vendorSku' => 'string',
        'notes' => 'string',
        'integrationXRef' => 'string',
        'sla' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\SLAReference',
        'entityType' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\EntityTypeReference',
        'recurringFlag' => 'boolean',
        'recurringRevenue' => 'float',
        'recurringCost' => 'float',
        'recurringOneTimeFlag' => 'boolean',
        'recurringBillCycle' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\BillingCycleReference',
        'recurringCycleType' => 'string',
        'dateEntered' => 'string',
        'category' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\ProductCategoryReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\Metadata',
        'customFields' => 'array',
    ];
}
