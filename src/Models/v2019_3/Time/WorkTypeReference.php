<?php

namespace Spinen\ConnectWise\Models\v2019_3\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkTypeReference Version v2019_3
 *
 * Model for WorkTypeReference
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Time\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class WorkTypeReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Time\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
