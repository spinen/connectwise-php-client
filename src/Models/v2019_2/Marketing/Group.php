<?php

namespace Spinen\ConnectWise\Models\v2019_2\Marketing;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class Group Version v2019_2
 *
 * Model for Group
 *
 * @property Metadata $_info
 * @property boolean $inactiveFlag
 * @property boolean $publicFlag
 * @property integer $id
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
        'publicFlag' => 'boolean'
    ];
}
