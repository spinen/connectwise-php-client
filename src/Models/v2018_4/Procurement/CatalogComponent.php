<?php

namespace Spinen\ConnectWise\Models\v2018_4\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CatalogComponent Version v2018_4
 *
 * Model for CatalogComponent
 *
 * @property CatalogItemReference $catalogItem
 * @property CatalogItemReference $parentCatalogItem
 * @property Metadata $_info
 * @property bool $hideDescriptionFlag
 * @property bool $hideExtendedPriceFlag
 * @property bool $hideItemIdentifierFlag
 * @property bool $hidePriceFlag
 * @property bool $hideQuantityFlag
 * @property float $cost
 * @property float $price
 * @property float $quantity
 * @property int $id
 * @property int $sequenceNumber
 */
class CatalogComponent extends Model
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
        'parentCatalogItem' => CatalogItemReference::class,
        'price' => 'float',
        'quantity' => 'float',
        'sequenceNumber' => 'integer',
    ];
}
