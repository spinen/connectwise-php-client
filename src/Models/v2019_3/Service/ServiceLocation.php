<?php

namespace Spinen\ConnectWise\Models\v2019_3\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceLocation Version v2019_3
 *
 * Model for ServiceLocation
 *
 * @property integer $id
 * @property string $name
 * @property string $where
 * @property boolean $defaultFlag
 * @property Spinen\ConnectWise\Models\v2019_3\Service\Metadata $_info
 */
class ServiceLocation extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'where' => 'string',
        'defaultFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Service\Metadata',
    ];
}
