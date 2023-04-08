<?php

namespace Spinen\ConnectWise\Models\v2019_3\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceLocation Version v2019_3
 *
 * Model for ServiceLocation
 *
 * @property Metadata $_info
 * @property bool $defaultFlag
 * @property int $id
 * @property string $name
 * @property string $where
 */
class ServiceLocation extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'name' => 'string',
        'where' => 'string',
    ];
}
