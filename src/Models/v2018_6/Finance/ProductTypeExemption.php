<?php

namespace Spinen\ConnectWise\Models\v2018_6\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProductTypeExemption Version v2018_6
 * 
 * Model for ProductTypeExemption
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\ProductTypeReference $productType
 * @property array $taxableLevels
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\Metadata $_info
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
        'productType' => 'Spinen\ConnectWise\Models\v2018_6\Finance\ProductTypeReference',
        'taxableLevels' => 'array',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Finance\Metadata',
    ];
}
