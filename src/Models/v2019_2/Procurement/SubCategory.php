<?php

namespace Spinen\ConnectWise\Models\v2019_2\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SubCategory Version v2019_2
 *
 * Model for SubCategory
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\ProductCategoryReference $category
 * @property boolean $inactiveFlag
 * @property integer $id
 * @property string $integrationXref
 * @property string $name
 */
class SubCategory extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\Metadata',
        'category' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\ProductCategoryReference',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'integrationXref' => 'string',
        'name' => 'string',
    ];
}
