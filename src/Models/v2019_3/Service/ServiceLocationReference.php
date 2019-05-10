<?php

namespace Spinen\ConnectWise\Models\v2019_3\Service;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceLocationReference Version v2019_3
 *
 * Model for ServiceLocationReference
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $name
 */
class ServiceLocationReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'name' => 'string'
    ];
}
