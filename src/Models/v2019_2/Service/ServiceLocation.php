<?php

namespace Spinen\ConnectWise\Models\v2019_2\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceLocation Version v2019_2
 *
 * Model for ServiceLocation
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Service\Metadata $_info
 * @property boolean $defaultFlag
 * @property integer $id
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Service\Metadata',
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'name' => 'string',
        'where' => 'string',
    ];
}
