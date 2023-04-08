<?php

namespace Spinen\ConnectWise\Models\v2019_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectStatusReference Version v2019_4
 *
 * Required when notifyType is set to: "Change Project Status"
 *
 * @property Metadata $_info
 * @property int $id
 * @property string $name
 */
class ProjectStatusReference extends Model
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
