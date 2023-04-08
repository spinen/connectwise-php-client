<?php

namespace Spinen\ConnectWise\Models\v2018_6\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProductSubCategoryReference Version v2018_6
 *
 * Model for ProductSubCategoryReference
 *
 * @property Metadata $_info
 * @property int $id
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
        '_info' => Metadata::class,
        'id' => 'integer',
        'name' => 'string',
    ];
}
