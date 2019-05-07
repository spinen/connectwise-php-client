<?php

namespace Spinen\ConnectWise\Models\v2018_5\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CatalogsItem
 *
 * @property integer $id
 * @property string $identifier
 * @property string $description
 * @property boolean $inactiveFlag
 * @property string $productClass
 * @property boolean $serializedFlag
 * @property boolean $serializedCostFlag
 * @property boolean $phaseProductFlag
 * @property integer $minStockLevel
 * @property double $price
 * @property double $cost
 * @property string $priceAttribute
 * @property boolean $taxableFlag
 * @property string $customerDescription
 * @property string $manufacturerPartNumber
 * @property string $vendorSku
 * @property string $notes
 * @property string $integrationXRef
 * @property boolean $recurringFlag
 * @property double $recurringRevenue
 * @property double $recurringCost
 * @property boolean $recurringOneTimeFlag
 * @property string $recurringCycleType
 * @property string $dateEntered
 * @property array $customFields
 */
class CatalogsItem extends Model
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
        'productClass' => 'string',
        'serializedFlag' => 'boolean',
        'serializedCostFlag' => 'boolean',
        'phaseProductFlag' => 'boolean',
        'minStockLevel' => 'integer',
        'price' => 'double',
        'cost' => 'double',
        'priceAttribute' => 'string',
        'taxableFlag' => 'boolean',
        'customerDescription' => 'string',
        'manufacturerPartNumber' => 'string',
        'vendorSku' => 'string',
        'notes' => 'string',
        'integrationXRef' => 'string',
        'recurringFlag' => 'boolean',
        'recurringRevenue' => 'double',
        'recurringCost' => 'double',
        'recurringOneTimeFlag' => 'boolean',
        'recurringCycleType' => 'string',
        'dateEntered' => 'string',
        'customFields' => 'array',
    ];
}
