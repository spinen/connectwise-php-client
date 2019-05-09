<?php

namespace Spinen\ConnectWise\Models\v2019_3\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Group Version v2019_3
 * 
 * Model for Group
 *
 * @property integer $id
 * @property string $name
 * @property string $publicDescription
 * @property boolean $publicFlag
 * @property boolean $inactiveFlag
 * @property Spinen\ConnectWise\Models\v2019_3\Marketing\Metadata $_info
 */
class Group extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'publicDescription' => 'string',
        'publicFlag' => 'boolean',
        'inactiveFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Marketing\Metadata',
    ];
}
