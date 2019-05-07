<?php

namespace Spinen\ConnectWise\Models\v2019_3\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SubCategory
 *
 * @property integer $id
 * @property string $name
 * @property boolean $inactiveFlag
 * @property string $integrationXref
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
    ];
}
