<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Lab Version v2018_5
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
