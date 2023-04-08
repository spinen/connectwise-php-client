<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ImapSetupReference Version v2018_4
 *
 * Model for ImapSetupReference
 *
 * @property Metadata $_info
 * @property int $id
 * @property string $name
 */
class ImapSetupReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'name' => 'string',
    ];
}
