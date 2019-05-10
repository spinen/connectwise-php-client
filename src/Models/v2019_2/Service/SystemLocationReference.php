<?php

namespace Spinen\ConnectWise\Models\v2019_2\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SystemLocationReference Version v2019_2
 *
 * Model for SystemLocationReference
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Service\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class SystemLocationReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Service\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
