<?php

namespace Spinen\ConnectWise\Models\v2019_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Link Version v2019_5
 *
 * Model for Link
 *
 * @property Metadata $_info
 * @property int $id
 * @property int $tableReferenceId
 * @property string $name
 * @property string $screenLink
 * @property string $url
 */
class Link extends Model
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
        'screenLink' => 'string',
        'tableReferenceId' => 'integer',
        'url' => 'string',
    ];
}
