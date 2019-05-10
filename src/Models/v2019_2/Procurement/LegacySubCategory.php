<?php

namespace Spinen\ConnectWise\Models\v2019_2\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class LegacySubCategory Version v2019_2
 *
 * Model for LegacySubCategory
 *
 * @property integer $id
 * @property string $name
 * @property boolean $inactiveFlag
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\Metadata $_info
 */
class LegacySubCategory extends Model
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\Metadata',
    ];
}
