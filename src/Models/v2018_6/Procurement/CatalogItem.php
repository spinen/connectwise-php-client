<?php

namespace Spinen\ConnectWise\Models\v2018_6\Procurement;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class CatalogItem Version v2018_6
 *
 * Model for CatalogItem
 *
 * @property BillingCycleReference $recurringBillCycle
 * @property CompanyReference $vendor
 * @property EntityTypeReference $entityType
 * @property ManufacturerReference $manufacturer
 * @property Metadata $_info
 * @property ProductCategoryReference $category
 * @property ProductSubCategoryReference $subcategory
 * @property ProductTypeReference $type
 * @property SLAReference $sla
 * @property UnitOfMeasureReference $unitOfMeasure
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
        '_info' => Metadata::class,
        'category' => ProductCategoryReference::class,
        'cost' => 'float',
        'customFields' => 'array',
        'customerDescription' => 'string',
        'dateEntered' => 'string',
        'description' => 'string',
        'entityType' => EntityTypeReference::class,
        'id' => 'integer',
        'identifier' => 'string',
        'inactiveFlag' => 'boolean',
        'integrationXRef' => 'string',
        'manufacturer' => ManufacturerReference::class,
        'manufacturerPartNumber' => 'string',
        'minStockLevel' => 'integer',
        'notes' => 'string',
        'phaseProductFlag' => 'boolean',
        'price' => 'float',
        'priceAttribute' => 'string',
        'productClass' => 'string',
        'recurringBillCycle' => BillingCycleReference::class,
        'recurringCost' => 'float',
        'recurringCycleType' => 'string',
        'recurringFlag' => 'boolean',
        'recurringOneTimeFlag' => 'boolean',
        'recurringRevenue' => 'float',
        'serializedCostFlag' => 'boolean',
        'serializedFlag' => 'boolean',
        'sla' => SLAReference::class,
        'subcategory' => ProductSubCategoryReference::class,
        'taxableFlag' => 'boolean',
        'type' => ProductTypeReference::class,
        'unitOfMeasure' => UnitOfMeasureReference::class,
        'vendor' => CompanyReference::class,
        'vendorSku' => 'string'
    ];
}
