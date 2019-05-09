<?php

namespace Spinen\ConnectWise\Models\v2018_4\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SubCategory Version v2018_4
 * 
 * Model for SubCategory
 *
 * @property integer $id
 * @property string $name
 * @property boolean $inactiveFlag
 * @property string $integrationXref
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\ProductCategoryReference $category
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\Metadata $_info
 */
class SubCategory extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'inactiveFlag' => 'boolean',
        'integrationXref' => 'string',
        'category' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\ProductCategoryReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\Metadata',
    ];
}
