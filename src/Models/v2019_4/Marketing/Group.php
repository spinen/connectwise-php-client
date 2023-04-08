<?php

namespace Spinen\ConnectWise\Models\v2019_4\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Group Version v2019_4
 *
 * Model for Group
 *
 * @property Metadata $_info
 * @property bool $inactiveFlag
 * @property bool $publicFlag
 * @property int $id
 * @property string $name
 * @property string $publicDescription
 */
class Group extends Model
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
        'publicDescription' => 'string',
        'publicFlag' => 'boolean',
    ];
}
