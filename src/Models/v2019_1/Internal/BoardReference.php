<?php

namespace Spinen\ConnectWise\Models\v2019_1\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardReference Version v2019_1
 *
 * Model for BoardReference
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class BoardReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Internal\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
