<?php

namespace Spinen\ConnectWise\Models\v2018_5\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProductSubCategoryReference Version v2018_5
 *
 * Model for ProductSubCategoryReference
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Procurement\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Procurement\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
