<?php

namespace Spinen\ConnectWise\Models\v2018_4\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProductSubCategoryReference Version v2018_4
 *
 * Model for ProductSubCategoryReference
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class ProductSubCategoryReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Sales\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
