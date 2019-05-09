<?php

namespace Spinen\ConnectWise\Models\v2019_3\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceSubTypeReference Version v2019_3
 * 
 * Model for ServiceSubTypeReference
 *
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2019_3\Service\Metadata $_info
 */
class ServiceSubTypeReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Service\Metadata',
    ];
}