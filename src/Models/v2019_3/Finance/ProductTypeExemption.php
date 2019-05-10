<?php

namespace Spinen\ConnectWise\Models\v2019_3\Finance;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ProductTypeExemption Version v2019_3
 *
 * Model for ProductTypeExemption
 *
 * @property Metadata $_info
 * @property ProductTypeReference $productType
 * @property array $taxableLevels
 * @property integer $id
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
        'taxableLevels' => 'array'
    ];
}
