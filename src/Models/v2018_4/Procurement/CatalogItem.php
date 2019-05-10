<?php

namespace Spinen\ConnectWise\Models\v2018_4\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CatalogItem Version v2018_4
 *
 * Model for CatalogItem
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\BillingCycleReference $recurringBillCycle
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\CompanyReference $vendor
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\EntityTypeReference $entityType
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\ManufacturerReference $manufacturer
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\ProductCategoryReference $category
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\ProductSubCategoryReference $subcategory
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\ProductTypeReference $type
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\SLAReference $sla
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\UnitOfMeasureReference $unitOfMeasure
 * @property array $customFields
 * @property boolean $inactiveFlag
 * @property boolean $phaseProductFlag
 * @property boolean $recurringFlag
 * @property boolean $recurringOneTimeFlag
 * @property boolean $serializedCostFlag
 * @property boolean $serializedFlag
 * @property boolean $taxableFlag
 * @property float $cost
 * @property float $price
 * @property float $recurringCost
 * @property float $recurringRevenue
 * @property integer $id
 * @property integer $minStockLevel
 * @property string $customerDescription
 * @property string $dateEntered
 * @property string $description
 * @property string $identifier
 * @property string $integrationXRef
 * @property string $manufacturerPartNumber
 * @property string $notes
 * @property string $priceAttribute
 * @property string $productClass
 * @property string $recurringCycleType
 * @property string $vendorSku
 */
class CatalogItem extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\Metadata',
        'category' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\ProductCategoryReference',
        'cost' => 'float',
        'customFields' => 'array',
        'customerDescription' => 'string',
        'dateEntered' => 'string',
        'description' => 'string',
        'entityType' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\EntityTypeReference',
        'id' => 'integer',
        'identifier' => 'string',
        'inactiveFlag' => 'boolean',
        'integrationXRef' => 'string',
        'manufacturer' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\ManufacturerReference',
        'manufacturerPartNumber' => 'string',
        'minStockLevel' => 'integer',
        'notes' => 'string',
        'phaseProductFlag' => 'boolean',
        'price' => 'float',
        'priceAttribute' => 'string',
        'productClass' => 'string',
        'recurringBillCycle' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\BillingCycleReference',
        'recurringCost' => 'float',
        'recurringCycleType' => 'string',
        'recurringFlag' => 'boolean',
        'recurringOneTimeFlag' => 'boolean',
        'recurringRevenue' => 'float',
        'serializedCostFlag' => 'boolean',
        'serializedFlag' => 'boolean',
        'sla' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\SLAReference',
        'subcategory' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\ProductSubCategoryReference',
        'taxableFlag' => 'boolean',
        'type' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\ProductTypeReference',
        'unitOfMeasure' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\UnitOfMeasureReference',
        'vendor' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\CompanyReference',
        'vendorSku' => 'string',
    ];
}
