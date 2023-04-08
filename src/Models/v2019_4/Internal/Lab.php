<?php

namespace Spinen\ConnectWise\Models\v2019_4\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Lab Version v2019_4
 *
 * Model for Lab
 *
 * @property Metadata $_info
 * @property bool $adminLock
 * @property bool $inactiveFlag
 * @property int $id
 * @property string $identifier
 */
class Lab extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'adminLock' => 'boolean',
        'id' => 'integer',
        'identifier' => 'string',
        'inactiveFlag' => 'boolean',
    ];
}
