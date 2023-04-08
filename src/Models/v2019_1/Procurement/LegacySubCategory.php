<?php

namespace Spinen\ConnectWise\Models\v2019_1\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class LegacySubCategory Version v2019_1
 *
 * Model for LegacySubCategory
 *
 * @property Metadata $_info
 * @property bool $inactiveFlag
 * @property int $id
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
        'name' => 'string',
    ];
}
