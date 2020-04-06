<?php

namespace Spinen\ConnectWise\Models\v2019_5\Procurement;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class LegacySubCategory Version v2019_5
 *
 * Model for LegacySubCategory
 *
 * @property Metadata $_info
 * @property boolean $inactiveFlag
 * @property integer $id
 * @property string $name
 */
class LegacySubCategory extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'name' => 'string'
    ];
}
