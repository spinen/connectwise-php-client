<?php

namespace Spinen\ConnectWise\Models\v2019_1\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Group Version v2019_1
 *
 * Model for Group
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Marketing\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Marketing\Metadata',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'name' => 'string',
        'publicDescription' => 'string',
        'publicFlag' => 'boolean',
    ];
}
