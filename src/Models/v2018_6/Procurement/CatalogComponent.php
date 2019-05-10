<?php

namespace Spinen\ConnectWise\Models\v2018_6\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CatalogComponent Version v2018_6
 *
 * Model for CatalogComponent
 *
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\CatalogItemReference $catalogItem
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\CatalogItemReference $parentCatalogItem
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\Metadata $_info
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
class CatalogComponent extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\Metadata',
        'catalogItem' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\CatalogItemReference',
        'cost' => 'float',
        'hideDescriptionFlag' => 'boolean',
        'hideExtendedPriceFlag' => 'boolean',
        'hideItemIdentifierFlag' => 'boolean',
        'hidePriceFlag' => 'boolean',
        'hideQuantityFlag' => 'boolean',
        'id' => 'integer',
        'parentCatalogItem' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\CatalogItemReference',
        'price' => 'float',
        'quantity' => 'float',
        'sequenceNumber' => 'integer',
    ];
}
