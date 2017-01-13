<?php

namespace Spinen\ConnectWise\Models\Procurement;

use Spinen\ConnectWise\Support\Model;

class CatalogComponent extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'sequenceNumber' => 'integer',
        'quantity' => 'double',
        'hidePriceFlag' => 'boolean',
        'hideItemIdentifierFlag' => 'boolean',
        'hideDescriptionFlag' => 'boolean',
        'hideQuantityFlag' => 'boolean',
        'price' => 'double',
        'cost' => 'double',
    ];
}
