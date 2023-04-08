<?php

namespace Spinen\ConnectWise\Models\v2019_1\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceTeamReference Version v2019_1
 *
 * Model for ServiceTeamReference
 *
 * @property Metadata $_info
 * @property int $id
 * @property string $name
 */
class ServiceTeamReference extends Model
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
