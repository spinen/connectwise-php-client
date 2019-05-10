<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProductTypeExemption Version v2019_1
 *
 * Model for ProductTypeExemption
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\ProductTypeReference $productType
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Finance\Metadata',
        'id' => 'integer',
        'productType' => 'Spinen\ConnectWise\Models\v2019_1\Finance\ProductTypeReference',
        'taxableLevels' => 'array',
    ];
}
