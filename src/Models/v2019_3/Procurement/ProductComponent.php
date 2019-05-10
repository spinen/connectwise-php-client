<?php

namespace Spinen\ConnectWise\Models\v2019_3\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProductComponent Version v2019_3
 * 
 * Model for ProductComponent
 *
 * @property integer $id
 * @property integer $sequenceNumber
 * @property float $quantity
 * @property Spinen\ConnectWise\Models\v2019_3\Procurement\CatalogItemReference $catalogItem
 * @property boolean $hidePriceFlag
 * @property boolean $hideItemIdentifierFlag
 * @property boolean $hideDescriptionFlag
 * @property boolean $hideQuantityFlag
 * @property boolean $hideExtendedPriceFlag
 * @property Spinen\ConnectWise\Models\v2019_3\Procurement\CompanyReference $vendor
 * @property Spinen\ConnectWise\Models\v2019_3\Procurement\ProductItemReference $parentProductItem
 * @property Spinen\ConnectWise\Models\v2019_3\Procurement\ProductItemReference $productItem
 * @property float $price
 * @property float $cost
 * @property Spinen\ConnectWise\Models\v2019_3\Procurement\Metadata $_info
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
        'quantity' => 'float',
        'catalogItem' => 'Spinen\ConnectWise\Models\v2019_3\Procurement\CatalogItemReference',
        'hidePriceFlag' => 'boolean',
        'hideItemIdentifierFlag' => 'boolean',
        'hideDescriptionFlag' => 'boolean',
        'hideQuantityFlag' => 'boolean',
        'hideExtendedPriceFlag' => 'boolean',
        'vendor' => 'Spinen\ConnectWise\Models\v2019_3\Procurement\CompanyReference',
        'parentProductItem' => 'Spinen\ConnectWise\Models\v2019_3\Procurement\ProductItemReference',
        'productItem' => 'Spinen\ConnectWise\Models\v2019_3\Procurement\ProductItemReference',
        'price' => 'float',
        'cost' => 'float',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Procurement\Metadata',
    ];
}
