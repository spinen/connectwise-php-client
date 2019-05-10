<?php

namespace Spinen\ConnectWise\Models\v2019_2\Procurement;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ProductComponent Version v2019_2
 *
 * Model for ProductComponent
 *
 * @property CatalogItemReference $catalogItem
 * @property CompanyReference $vendor
 * @property Metadata $_info
 * @property ProductItemReference $parentProductItem
 * @property ProductItemReference $productItem
 * @property boolean $hideDescriptionFlag
 * @property boolean $hideExtendedPriceFlag
 * @property boolean $hideItemIdentifierFlag
 * @property boolean $hidePriceFlag
 * @property boolean $hideQuantityFlag
 * @property float $cost
 * @property float $price
 * @property float $quantity
 * @property integer $id
 * @property integer $sequenceNumber
 */
class ProductComponent extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'catalogItem' => CatalogItemReference::class,
        'cost' => 'float',
        'hideDescriptionFlag' => 'boolean',
        'hideExtendedPriceFlag' => 'boolean',
        'hideItemIdentifierFlag' => 'boolean',
        'hidePriceFlag' => 'boolean',
        'hideQuantityFlag' => 'boolean',
        'id' => 'integer',
        'parentProductItem' => ProductItemReference::class,
        'price' => 'float',
        'productItem' => ProductItemReference::class,
        'quantity' => 'float',
        'sequenceNumber' => 'integer',
        'vendor' => CompanyReference::class
    ];
}
