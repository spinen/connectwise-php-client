<?php

namespace Spinen\ConnectWise\Models\v2019_3\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Lab Version v2019_3
 *
 * Model for Lab
 *
 * @property integer $id
 * @property string $identifier
 * @property boolean $inactiveFlag
 * @property boolean $adminLock
 * @property Spinen\ConnectWise\Models\v2019_3\Internal\Metadata $_info
 */
class Lab extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'identifier' => 'string',
        'inactiveFlag' => 'boolean',
        'adminLock' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Internal\Metadata',
    ];
}
