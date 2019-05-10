<?php

namespace Spinen\ConnectWise\Models\v2019_2\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ActivityReference Version v2019_2
 *
 * Model for ActivityReference
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Marketing\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class ActivityReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Marketing\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
