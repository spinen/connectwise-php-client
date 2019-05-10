<?php

namespace Spinen\ConnectWise\Models\v2018_4\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProductComponent Version v2018_4
 * 
 * Model for ProductComponent
 *
 * @property integer $id
 * @property integer $sequenceNumber
 * @property float $quantity
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\CatalogItemReference $catalogItem
 * @property boolean $hidePriceFlag
 * @property boolean $hideItemIdentifierFlag
 * @property boolean $hideDescriptionFlag
 * @property boolean $hideQuantityFlag
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\CompanyReference $vendor
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\ProductItemReference $parentProductItem
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\ProductItemReference $productItem
 * @property float $price
 * @property float $cost
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\Metadata $_info
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
        'catalogItem' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\CatalogItemReference',
        'hidePriceFlag' => 'boolean',
        'hideItemIdentifierFlag' => 'boolean',
        'hideDescriptionFlag' => 'boolean',
        'hideQuantityFlag' => 'boolean',
        'vendor' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\CompanyReference',
        'parentProductItem' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\ProductItemReference',
        'productItem' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\ProductItemReference',
        'price' => 'float',
        'cost' => 'float',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\Metadata',
    ];
}
