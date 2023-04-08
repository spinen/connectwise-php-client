<?php

namespace Spinen\ConnectWise\Models\v2018_6\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProductTypeExemption Version v2018_6
 *
 * Model for ProductTypeExemption
 *
 * @property Metadata $_info
 * @property ProductTypeReference $productType
 * @property array $taxableLevels
 * @property int $id
 */
class ProductTypeExemption extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'productType' => ProductTypeReference::class,
        'taxableLevels' => 'array',
    ];
}
