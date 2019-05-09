<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProductTypeExemption Version v2019_2
 * 
 * Model for ProductTypeExemption
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\ProductTypeReference $productType
 * @property array $taxableLevels
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\Metadata $_info
 */
class ProductTypeExemption extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'productType' => 'Spinen\ConnectWise\Models\v2019_2\Finance\ProductTypeReference',
        'taxableLevels' => 'array',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Finance\Metadata',
    ];
}
