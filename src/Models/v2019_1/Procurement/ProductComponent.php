<?php

namespace Spinen\ConnectWise\Models\v2019_1\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProductComponent Version v2019_1
 * 
 * Model for ProductComponent
 *
 * @property integer $id
 * @property integer $sequenceNumber
 * @property number $quantity
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\CatalogItemReference $catalogItem
 * @property boolean $hidePriceFlag
 * @property boolean $hideItemIdentifierFlag
 * @property boolean $hideDescriptionFlag
 * @property boolean $hideQuantityFlag
 * @property boolean $hideExtendedPriceFlag
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\CompanyReference $vendor
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\ProductItemReference $parentProductItem
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\ProductItemReference $productItem
 * @property number $price
 * @property number $cost
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\Metadata $_info
 */
class ProductComponent extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'sequenceNumber' => 'integer',
        'quantity' => 'number',
        'catalogItem' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\CatalogItemReference',
        'hidePriceFlag' => 'boolean',
        'hideItemIdentifierFlag' => 'boolean',
        'hideDescriptionFlag' => 'boolean',
        'hideQuantityFlag' => 'boolean',
        'hideExtendedPriceFlag' => 'boolean',
        'vendor' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\CompanyReference',
        'parentProductItem' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\ProductItemReference',
        'productItem' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\ProductItemReference',
        'price' => 'number',
        'cost' => 'number',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\Metadata',
    ];
}
