<?php

namespace Spinen\ConnectWise\Models\v2018_5\Procurement;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class SubCategory Version v2018_5
 *
 * Model for SubCategory
 *
 * @property Metadata $_info
 * @property ProductCategoryReference $category
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
        '_info' => Metadata::class,
        'category' => ProductCategoryReference::class,
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'integrationXref' => 'string',
        'name' => 'string'
    ];
}
