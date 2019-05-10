<?php

namespace Spinen\ConnectWise\Models\v2019_1\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CatalogComponent Version v2019_1
 *
 * Model for CatalogComponent
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\CatalogItemReference $catalogItem
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\CatalogItemReference $parentCatalogItem
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\Metadata',
        'catalogItem' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\CatalogItemReference',
        'cost' => 'float',
        'hideDescriptionFlag' => 'boolean',
        'hideExtendedPriceFlag' => 'boolean',
        'hideItemIdentifierFlag' => 'boolean',
        'hidePriceFlag' => 'boolean',
        'hideQuantityFlag' => 'boolean',
        'id' => 'integer',
        'parentCatalogItem' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\CatalogItemReference',
        'price' => 'float',
        'quantity' => 'float',
        'sequenceNumber' => 'integer',
    ];
}
